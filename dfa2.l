%{
%}

reg (a|b)*a(aa|bb|ab|ba)

%%

{reg} {printf("accepted!");}
%% {printf("Not accepted!");}

int yywrap(){}

int main(){
	yylex();
	return 0;
}
