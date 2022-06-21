%{
%}

%%
[+-]?[0-9]+ {printf("integer Constant\n");}
[+-]?[0-9]+"."[0-9]+ {printf("Float constant\n");}
^[a-zA-Z_][a-zA-Z_0-9]* {printf("Indetofiers\n");}

%% {printf("Niether Indentifier nor constant");}

int yywrap(){}

int main(){
	yylex();
	return 0;
}
