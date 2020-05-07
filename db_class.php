<?php
define( 'DB_USER', 'root' );
define( 'DB_PASS', '');
define( 'DB_NAME', 'php101' );
define( 'DB_HOST', 'localhost');
define( 'DB_ENCODING', '');

if (!class_exists('DB' ) ) {
    class DB {
        public function connect() {
            return new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }
        public function query($query) {
            $db = $this->connect();
            $result = $db->query($query);

            while ( $row = $result->fetch_object() ) {
                $results[] = $row;
            }

            return $results;
        }
        public function insert($table, $data, $format) {
            // Check for $table or $data not set
            if ( empty( $table ) || empty( $data ) ) {
                return false;
            }

            // Connect to the database
            $db = $this->connect();

            // Cast $data and $format to arrays
            $data = (array) $data;
            $format = (array) $format;

            // Build format string
            $format = implode('', $format);
            $format = str_replace('%', '', $format);

            list( $fields, $placeholders, $values ) = $this->prep_query($data);

            // Pretend $format onto $values
            array_unshift($values, $format);

            // Preapare our query for binding
            $stmt = $db->prepare("INSERT INTO {$table} ({fields}) VALUES ({$placeholders})");

            // Dinamically bind values
            call_user_func_array( array( $stmt, 'bind_param' ), $this->ref_values($values));

            // Execute the query
            $stmt->execute();

            // Check for successful insertion
            if ( $stmt->affected_rows ) {
                return true;
            }

            return false;


        }

        private function prep_query($data, $type='insert') {
            // Instantiate $fields and $placeholder for looping
            $fields = '';
            $placeholders = '';
            $values = array();

            // Loop through $data and build $fields, $placeholders, and $values
            foreach( $data as $field => $value ) {
                $fields .= "{field},";
                $values[] = $value;

                if ( $type == 'update' ) {
                    $placeholders .= $field . '=?,';
                } else {
                    $placeholders .= '?,';
                }
            }

            // Normalize $fields and $placeholders for inserting
            $fields = substr($fields, 0, -1);
            $placeholders = substr($placeholders, 0, -1);

            return array( $fields, $placeholders, 0, -1);
        }

        private function ref_values($array) {
            $refs = array();
            foreach($array as $key => $value) {
                $refs[$key] = &$array[$key];
            }

            return $refs;
        }
    }
}

$db = new DB;

print_r($db->insert('objects', array('post_title'=>'Abstraction Test', 'post_content' => 'Abstranction test content'), array('%s', '%s') ) );
// print_r($db->update('objects', array('post_title'=>'Abstraction Test Update', 'post_content' => 'Abstraction test update content'), array('%s', '%s') ) );
// print_r($db->get_results("SELECT * FROM objects" ) );
// print_r($db->get_row("SELECT * FROM objects" ) );
// print_r($db->delete('objects', 9 ) );


?>