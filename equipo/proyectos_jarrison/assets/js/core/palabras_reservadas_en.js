// ======== CONSTANTES ========

//EXPRESIONES REGULARES
const EX_PRINT = /(print)(|\s+)[(](|\s+)(|["])(.+)(|["])(|\s+)(|\s+|,+|.+|\s+)(|\s+)[)]/g;
const EX_FOR = /(for)(\s+)(\w+)(\s+)(from)(\s+)(\w+)(\s+)(to)(\s+)(\d+)(\s+)(do)/g;
const EX_WHILE = /(while)(|\s+)[(](|\s+)(\w+)(|\s+)(|(<|>|<=|>=|=>|=<|==|!=|<>)(|\s+)(\w+))(|\s+)[)](|\s+)(then)/g;
const EX_IF = /(if)(|\s+)[(](|\s+)(\w+)(|\s+)(|(<|>|<=|>=|=>|=<|==|!=|<>)(|\s+)(\w+))(|\s+)[)](|\s+)(then)/g;

//INICIO Y FIN
const INICIO = "<begin>"; 
const END = "<end>"; 

//COMENTARIOS
const COMMENT = "--"

//VARIABLES
const DECLARE = "<declare>"; 
const END_DECLARE = "<end declare>"; 
var VARIABLES = ["integer", "text", "real", "boolean"];
const INT = "integer"; 
const STRING = "text"; 
const FLOAT = "real"; 
const BOOLEAN = "boolean";

//COMPARADORES
const EQUAL = "==";
const DIFFERENT = "!=";
const MAJOR = ">";
const LESS = "<";
const MAJOR_OR_EQUAL = ">=";
const LESS_OR_EQUAL = "<=";

//OPERAICONES
const SUMA = "+";
const MULTIPLICACION = "*";
const DIVISION = "/";
const RESTA = "-";
const CONCAT = "|";

//TIPOS EJECUCION
const TIPO_IF = "1";
const TIPO_CICLO_FOR = "2";
const TIPO_CICLO_WHILE = "3";

// PASOS FOR

const STEP_FOR_VARIABLE = 1;
const STEP_FOR_VALOR_DESDE = 3;
const STEP_FOR_HASTA = 4;
const STEP_FOR_VALUE_HASTA = 5;

//CONDICIONALES
const IF = "if";
const IF_THEN = "then";
const ELSE_IF = "else if";
const ELSE = "else";
const END_IF = "end if";

//CICLOS
const FOR = "for";
const FOR_DESDE = "from";
const FOR_HASTA = "to";
const FOR_WHILE_HACER = "do";
const END_FOR = "end for";
const WHILE = "while";
const END_WHILE = "end while";

//FUNCIONES
const PRINT = "print";

//EXITO
const SUCCESS = "Ejecucion exitosa";

//ERRORES GENERALES
// &lt;declare&gt;: = <declare> 
const ERROR_INIT = "";
const ERROR_MISS_END_DECLARE = "Falta la etiqueta &lt;fin declarar&gt;";
const ERROR_MISS_DECLARE = "Falta la etiqueta &lt;fin declarar&gt;";
const ERROR_MISS_INICIO = "Falta la etiqueta &lt;inicio&gt;";
const ERROR_MISS_END = "Falta la etiqueta &lt;fin&gt;";
const ERROR_MISS_COMILLA = "Falta comillas (\") en la linea: ";
const ERROR_ESTRUCTURE_INCOMPLETE = "La estructura %1% no esta completa, en la linea: ";
const ERROR_MISS_WORD_RESERVE = "Falta palabra reservada %1%,  en la linea: ";
const ERROR_MISS_DECLARE_VARIABLE = "Falta declarar la variable %1%, en la linea: ";
const ERROR_MISS_FOR_HASTA_VALUE = "Falta el valor para hasta en la linea: ";
const ERROR_INICIO = "Falta cerrar la etiqueta &lt;inicio&gt; (&lt;inicio&gt;)";
const ERROR_END = "Falta cerrar la etiqueta &lt;inicio&gt; (&lt;fin&gt;)";
const ERROR_MISS_PC_DECLARE = "En el bloque &lt;declarar&gt; falta punto y coma (;) para finalizar linea";
const ERROR_MISS_WORD_RESERVE_2 = "No se encontro la palabra reservada: ";
const ERROR_MISS_VARIABLE = "No se encontro la variable %1%, en la linea: ";
const ERROR_WHILE_INFINITO = "Error el ciclo mientras es infinito debe cambiar la expresion.";
const ERROR_WHILE_NOT_INFINITO = "El ciclo mientras nunca sera utilizado se recomienda borrarlo o comentarlo.";
const ERROR_WHILE_DONT_EVALUATE_EXPRESSION = "La expresion del ciclo mientras no puede ser evaluada.";
const ERROR_WHILE_DONT_DECLARE_VAR = "La variable del ciclo mientras no ha sido declarada.";
const ERROR_WHILE_DONT_VALUE_VAR = "La variable del ciclo mientras no tiene un valor booleano o no a sido inicializada.";
const ERROR_WHILE_DIFFERENT_TIPE_DATA = "Las variables del ciclo mientras no son del mismo tipo.";
const ERROR_VARIABLE_NOT_FOUND = "La variable %1% no ha sido declarada.";
// ======== FIN CONSTANTES ========

