%{
#include<stdio.h>
int nl=0,bl=0,tb=0,ch=0;
%}

%%
[\n] {nl++;}
[\t] {tb++;}	
[" "] {bl++;}
. {ch++;}
%%

int yywrap(){return 1;}

int main() {
yylex();
printf("Lines %d \n tabs %d \n space %d \n char %d",nl,tb,bl,ch);
return 0;
}
