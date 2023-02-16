# 2023-02-14 17:10
Pues esta es la versión 0.6 del proyecto, la verdad es que me mosqueó tener que rehacer la parte de los logs.
Cosas que pasan, vamos a mejorar eso desde el principio y a rehacer el codigo un poco.

Tareas:

- Alta
	- index.php
	- FrontController
	- Fichero de lengauje
	- Home
	- PhP Blog
- Media
	- M7 UF1
		- E01
		- E04

## 19:32 - 19:57
Tareas:

- Alta
	- LangController
	- ErrorView
	- FrontController
	- Fichero de lengauje
	- Home
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
		
# 2023-02-15 2:20
Seguimos intentando crear las clases minimas necesarias para que la web se muestre minimamente.

Tareas:

- Alta
	- LangController
	- ErrorView
	- FrontController
	- Fichero de lengauje
	- Home
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
- Baja
	- Controller
		- Sanitize
		
## 2:59
Las primeras clases ya estan creadas de tal manera que al mostrar los errores no sale ningun mensaje de error.
Las prioridades han cambiado un poco.

Tareas:

- Alta
	- FrontController
	- Home
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- getMenu()
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize
		
# 2023-02-16 15:42
Seguimos trabajando en los objetivos anteriores.

Tareas:

- Alta
	- FrontController
		- Si es un get con parametros
		- Si es un post
	- Home
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- getMenu()
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize

## 16:01
Hehos los primeros templates y la vista de home, falta editar todos los tmplts.

Tareas:

- Alta
	- Tmplts
		- Aside
		- End
		- Error
		- Head
		- Header
		- Home
	- FrontController
		- Si es un get con parametros
		- Si es un post
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- getMenu()
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize

## 16:11
Vamos a ir haciendo tmplts.

Tareas:

- Alta
	- Tmplts
		- Aside
			- Recursos
	- HomeView
		- Añadir contenido
	- FrontController
		- Si es un get con parametros
		- Si es un post
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- getMenu()
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize
		
## 17:17
Actualizacion de MenuController, de momento da el menu entero.
Lo siguiente que voy a hacer es el contenido del home;

Tareas:

- Alta
	- Tmplts
		- Aside
			- Recursos
	- HomeView
		- Añadir contenido
	- FrontController
		- Si es un get con parametros
		- Si es un post
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- Pagina para modulos (depende de la logica del contenido del Home)
			- Pagina par ufs
				- Menus parciales
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize
