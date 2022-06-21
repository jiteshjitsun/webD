%{
	#include<stdio.h>
%}

DIGIT [0-9]
NUMBER {DIGIT}+
REAL {DIGIT}*"."{DIGIT}+
TEXT [a-zA-Z ]+
TEXT_NUMBERS [a-zA-Z0-9]
CONDITIONALS "if"|"else"|"else if"|"switch"|"case"
KEYWORD"break"|"continue"|"goto"|"printf"|"sprintf"|"scanf"|"sscanf"|"fopen"|"fwrite"|"fread|"fclose"|"write"|"read"|"open"|"close"|"return"|"int"|"float"|"char"|"unsinged"|"signed"|"short"|"long"|"double"
ITERATORS "for"|"while"|"do"
PREPROCESSOR "#"|"#line"|"#undef"|"#error"|"#elif"|"#else"|"#endif"|"#if"|"#define"|"#include"|"#pragma"|"#ifndef"|"#ifdef"
DELIMITER [; , :\t\n()"]
IDENTIFIER [a-zA-Z] {TEXT_NUMBERS} | [a-zA-Z] {TEXT_NUMBERS} [[{NUMBER}+]] 
FORMAT_SPECIFIER "%"{TEXT_NUMBERS}+
FILE "<"{IDENTIFIER}.h">"
COMMENT "/"[a-zA-Z0-9 \t\n;.~!@#$%^&()_+=<>?:"{}]"/"
AOPERATOR "+"|"-"|"*"|"/"|"="
BLOCK_BEGINS "{"
BLOCK_ENDS "}"
UNARY "++"|"--"
LOPERATOR "&"|"|"|"&&"|"~"|"||"|">"|"<"|"<="|">="|"=="
FUNCTION {IDENTIFIER}+"("{DELIMITER}{TEXT}{TEXT_NUMBERS}{DELIMITER}*")"
%%
{CONDITIONALS} { printf("%s is a conditional \n", yytext); }
{ITERATORS} { printf("%s is a iterator \n", yytext); }
{DIGIT} {printf("%s is a digit\n", yytext); }
{NUMBER} { printf("%s is a number \n", yytext); }
{REAL} { printf("%s is a real \n", yytext); }
{PREPROCESSOR} { printf("%s is a preprocessor \n", yytext); }
{DELIMITER} { printf("%s is a delimiter\n", yytext); }
{KEYWORD} { printf("%s is a keyword\n", yytext); }
{IDENTIFIER} { printf("%s is a identifiers\n", yytext); }
{COMMENT} { printf("%s is a comment\n", yytext); }
{AOPERATOR} { printf("%s is a aoperator\n", yytext); }
{LOPERATOR} { printf("%s is a loperator\n", yytext); }
{BLOCK_BEGINS} { printf("%s is a blocks begin\n", yytext); }
{BLOCK_ENDS} { printf("%s is a blocks end\n", yytext); }
{FILE} { printf("%s is a file\n", yytext); }
{UNARY} { printf("%s is a unarey\n", yytext); }
{FUNCTION} { printf("%s is a function\n", yytext); }
{FORMAT_SPECIFIER} { printf("%s is a format specifier\n", yytext); }
%%
int yywrap(){return 1;}

int main(){
	yylex();
	return 0;
}
