#include <stdio.h>
#include <conio.h>
#include <string>
#include <stdlib.h>



struct melodie
{
    char artist[35];
    char nume_piesa[35];
    char album[35];
    char anul[8];
    char genul[50];
    char link_youtube[50];
    char rating[35];

    };

string convertToString(char* a, int size) 
{ 
    int i; 
    string s = ""; 
    for (i = 0; i < size; i++) { 
        s = s + a[i]; 
    } 
    return s; 
} 

void meniu()
{
    printf("\t\t**********WELCOME TO MP3 PLAYER*************");
    printf("\n\n\t\t\t  MENU\t\t\n\n");
    printf("A - Adauga o melodie\n");
    printf("L - Afiseaza lista melodiilor\n");
    printf("M - Modifica o melodie\n");
    printf("C - Cauta o anumita melodie in lista\n");
    printf("S - Sterge o anumita melodie din lista\n");
    printf("T - Sterge toate melodiile din lista\n");
    printf("I - Info autor\n");
    printf("X - Exit\n");
}


void adaugare()
{
        system("cls");
        FILE *f;
        struct melodie p;
        f=fopen("project.txt","at+");
        printf("\nIntroduceti numele artistului: ");
        got(p.artist);
        printf("\nIntroduceti numele melodiei: ");
        got(p.nume_piesa);
        printf("\nIntroduceti numele albumului: ");
        got(p.album);
        printf("\nIntroduceti anul melodiei: ");
        got(p.anul);
        printf("\nIntroduceti genul melodiei:");
        got(p.genul);
        printf("\nIntroduceti link-ul de youtube(nu folositi CTRL+V):");
        got(p.link_youtube);
        printf("\nIntroduceti rating-ul dumneavoastra pentru melodie:");
        got(p.rating);
        fwrite(&p,sizeof(p),1,f);

      fflush(stdin);
        printf("\n\nInregistrare efectuata si salvata!\n");

fclose(f);

    printf("\nEnter any key");

	 getch();
    system("cls");
    meniu();
}

void listare()
{
    struct melodie p;
    FILE *f;
f=fopen("project","rb");
if(f==NULL)
{
printf("\nEroare de afisare a listei!(Nu ati adaugat inca nimic)\a\a\a\a\n");

}
while(fread(&p,sizeof(p),1,f)==1)
{
     printf("\n\n\n Lista dumneavoastra de melodii este:\n\n ");
        printf("\nArtist->%s\nNume melodie->%s\nAlbum->%s\nAnul->%s\nGenul->%ld\nLink-ul de youtube->%s\nRating-ul->%s\n",p.artist,p.nume_piesa,p.album,p.anul,p.genul,p.link_youtube,p.rating);

	 getch();
	 system("cls");
}
fclose(f);
 printf("\n Enter any key");
 getch();
    system("cls");
meniu();
}


void modificare()
{
    int c;
    FILE *f;
    int flag=0;
    struct melodie p,s;
	char  artist[50];
	f=fopen("project","rb+");
	if(f==NULL)
		{

			printf("\nDatele melodiei nu au fost adaugate inca!\a\a\a\a\n");

		}
	else
	{
	    system("cls");
		printf("\nIntroduceti numele artistului pentru modificare:\n");
            got(artist);
            while(fread(&p,sizeof(p),1,f)==1)
            {
                if(strcmp(artist,p.artist)==0)
                {



                    printf("\nIntroduceti noul nume al artistului: ");
                    got(s.artist);
                    printf("\nIntroduceti noul nume al melodiei: ");
                    got(s.nume_piesa);
                    printf("\nIntroduceti noul nume al albumului: ");
                    got(s.album);
                    printf("\nIntroduceti noul an al melodiei: ");
                    got(s.anul);
                    printf("\nIntroduceti noul gen al melodiei: ");
                    got(s.genul);
                    printf("\nIntroduceti noul link de youtube: ");
                    got(s.link_youtube);
                    printf("\nIntroduceti noul rating al dumneavoastra pentru melodie: ");
                    got(s.rating);
                    fseek(f,-sizeof(p),SEEK_CUR);
                    fwrite(&s,sizeof(p),1,f);
                    flag=1;
                    break;



                }
                fflush(stdin);


            }
            if(flag==1)
            {
                printf("\n\nInregistrarea dumneavoastra a fost modificata!\n");

            }
            else
            {
                    printf(" \nInregistrarea nu a fost gasita.\n");

            }
            fclose(f);
	}
	 printf("\n Enter any key");
	 getch();
    system("cls");
	meniu();

}

void cautare()
{
    struct melodie p;
FILE *f;
char artist[100];
int contor=0;

f=fopen("project","rb");
if(f==NULL)
{
    printf("\nEroare la deschiderea listei!\a\a\a\a\n");
}
else
{
printf("\nIntroduceti numele artistului pentru cautare\n");
got(artist);
    while(fread(&p,sizeof(p),1,f)==1)
        {
            if(strcmp(p.artist,artist)==0)
            {
            printf("\n\tDetaliile piesei cautate: %s",artist);
            printf("\nArtist->%s\nNume melodie->%s\nAlbum->%s\nAnul->%s\nGenul->%ld\nLink-ul de youtube->%s\nRating-ul->%s\n",p.artist,p.nume_piesa,p.album,p.anul,p.genul,p.link_youtube,p.rating);
            contor=1;
            break;
            }
        }
         if(!contor)
            printf("\nInregistrarea nu a fost gasita.\n");

 fclose(f);
}
  printf("\n Enter any key");

	 getch();
    system("cls");
meniu();
}

void stergemelodie()
{
    struct melodie p;
    FILE *f, *ft;
    char n;
	f=fopen("project","rb");
	ft=fopen("temp", "wb+");
	printf("\nIntroduceti numele artistului pentru a sterge inregistrarea: ");
    scanf("%s", &n);
    rewind(f);
    while (!feof(f))
		{
			fscanf(f,"%s %s %s %s %s %s %s", p.artist, p.nume_piesa, p.album,  p.anul, p.genul, p.link_youtube, p.rating);
			if(p.artist!=n)
            {
                fprintf(ft, "%s %s %s %s %s %s %s\n", p.artist, p.nume_piesa, p.album, p.anul, p.genul, p.link_youtube, p.rating);
            }
		}

	fclose(f);
	fclose(ft);
	remove("project.txt");
	rename("temp.txt", "project.txt");
	printf("\nInregistrarea a fost stearsa cu succes!\n");

 printf("\n Enter any key");

	 getch();
    system("cls");
meniu();
}


void stergetot()
{
    struct melodie p;
    FILE *f,*ft;
    ft = fopen("tmp","wb");
	f=fopen("project","rb");
	if(f==NULL)
		{

			printf("\nNu exista inregistrari.\a\a\a\a\n");

		}
    else
    {
	fclose(f);
	fclose(ft);
    remove("project");
    rename("temp","project");
    printf("\n\nInregistrarile au fost sterse cu succes!\n");
    }

 printf("\n Enter any key");

	 getch();
    system("cls");
meniu();
}





int main()
{
    system("color 4f");
    char op;

    while(1)
    {
        system("cls");
        meniu();
        op=toupper(getch());
        switch(op)
        {
        case 'A':
            adaugare();
            break;
        case 'L':
            listare();
            break;
        case 'M':
            modificare();
            break;
        case 'C':
            cautare();
            break;
        case 'S':
            stergemelodie();
            break;
        case 'T':
            stergetot();
            break;
        case 'I':
            printf("\nNume si prenume->Diaconescu Gabriel.\nGrupa->3212a.\n");
            printf("\n Enter any key");
	 getch();
    system("cls");
            break;
        case 'X':
            return 1;
        default:
                system("cls");
                printf("\nEnter 1 to 6 only");
                printf("\n Enter any key");
                getch();
        }
    }
    return 0;
}


void got(char *name)
{

   int i=0,j;
    char c,ch;
    do
    {
        c=getch();
                if(c!=8&&c!=13)
                {
                    *(name+i)=c;
                        putch(c);
                        i++;
                }
                if(c==8)
                {
                    if(i>0)
                    {
                        i--;
                    }
                   // printf("h");
                    system("cls");
                    for(j=0;j<i;j++)
                    {
                        ch=*(name+j);
                        putch(ch);

                    }

                }
    }while(c!=13);
      *(name+i)='\0';
}