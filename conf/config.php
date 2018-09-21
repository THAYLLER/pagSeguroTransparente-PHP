<?php
/*
Token gerado no site do pagseguro 
https://pagseguro.uol.com.br/preferencias/integracoes.jhtml
*/
//token de produção
define("TOKEN_PRODUCAO","546514E8B44045BBB72837B07E5999CD");
//token sandbox
define("TOKEN_SANDBOX","6EC239E15DC94F7096F10AEB810C59DA");

/*
status que definiram se a biblioteca estará ativa ou inativa, ou se está em produção ou teste
legenda dos status:
0 - inativo
1 - ativo e em produção
2 - ativo e em sandbox
*/
define("STATUS","0");

/*
credencias para teste
*/
define("NUMERO_CARD","4111111111111111");
define("BANDEIRA","VISA");
define("VALIDADE","12/2030");
define("CVV","123");