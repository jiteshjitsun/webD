%{
	#include<stdio.h>
	int l=0,c=0,w=0,ws=0;
%}

%%
[\n] {l++;}
[^ \n\t]+ {w++;c=c+yyleng;}
[ ] {ws++;}
. {c++;}
%%



int yywrap(){return 1;}

int main(){
	extern FILE* yyin;
	yyin = fopen("input1.txt","r");
	yylex();
	printf("Number of lines %d\n",l);
	printf("Number of words %d\n",w);
	printf("Number of char %d\n",c);
	printf("Number of white spaces %d\n",ws);
	return 0;
}
