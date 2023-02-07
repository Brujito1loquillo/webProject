<?php

$lang = [
    "web" => [
        "title" => "JPRibelles",
        "short" => "JPR",
        "href" => "?",
    ],
    
    "home" => [
        "title" => "Inicio",
        "news" => "Noticias",
        "os" => "Destacado",
    ],
    
    "exceptions" => [
        "title" => "Ha ocurrido un error inesperado.",
        "short" => "Error",
    ],
    
    "practics" => [
        /*
        0 => [
            "title" => "",
            "short" => "",
            "href" => "?module/show/$m",
            
            "ufs" => [
                0 => [
                    "title" => "",
                    "short" => "",
                    "href" => "?unit/show/$m/$u",
                    
                    "exs" => [
                        "00" => [
                            "title" => "",
                            "short" => "",
                            "href" => "",
                            
                            "text" => [
                                "zone" => [
                                    "text1" => "",
                                    "text2" => "",
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        */
        
        3 => [
            "title" => "Programación",
            "short" => "Programación",
            "href" => "?module/show/3",
            
            "ufs" => [
                4 => [
                    "title" => "Programación Orientada a Objeto",
                    "short" => "P.O.O.",
                    "href" => "?unit/show/7/4",
                    
                    "exs" => [
                        // Yo no hacia esta UF
                        /*"01" => [
                            "title" => "",
                            "short" => "",
                            "href" => "",
                            
                            "text" => [
                                "zone" => [
                                    "text1" => "",
                                    "text2" => "",
                                ],
                            ],
                        ],*/
                    ],
                ],
                
                5 => [
                    "title" => "Librerias de clases fundamentales",
                    "short" => "Librerias fundamentales",
                    "href" => "?unit/show/3/5",
                    
                    "exs" => [
                        "01" => [
                            "title" => "Libros",
                            "short" => "Libros",
                            "href" => "?libros/show",
                        ],
                        
                        "02" => [
                            "title" => "Conjunto",
                            "short" => "Conjunto",
                            "href" => "?conjunto/show",
                        ],
                        
                        "03" => [
                            "title" => "ArrayList con lista doblemente enlazada",
                            "short" => "Lista Circular",
                            "href" => "?listaCircular/show",
                        ],
                        
                        "04" => [
                            "title" => "Frases celebres",
                            "short" => "Frases celebres",
                            "href" => "?frasesCelebres/show",
                        ],
                        
                        "05" => [
                            "title" => "Cronometro",
                            "short" => "Cronometro",
                            "href" => "?cronometro/show",
                        ],
                    ],
                ],
            ],
        ],
        
        5 => [
            "title" => "Entornos de desarrollo",
            "short" => "IDE's",
            "href" => "?module/show/5",
            
            "ufs" => [
                2 => [
                    "title" => "Optimización de programario",
                    "short" => "Optimizacion de SoftWare",
                    "href" => "?unit/show/5/2",
                    
                    "exs" => [
                        "01" => [
                            "title" => "Cajero automatico",
                            "short" => "Cajero automatico",
                            "href" => "?cajero/show",
                            
                            /*"text" => [
                                "zone" => [
                                    "text1" => "",
                                    "text2" => "",
                                ],
                            ],*/
                        ],
                        
                        "02" => [
                            "title" => "Casos de prueba",
                            "short" => "Casos de prueba",
                            "href" => "?casosPrueba/show",
                        ],
                        
                        "03" => [
                            "title" => "Pruebas de caja blanca",
                            "short" => "Pruebas de caja blanca",
                            "href" => "?cajaBlanca/show",
                        ],
                        
                        "04" => [
                            "title" => "Pruebas con JUnit",
                            "short" => "Pruebas con JUnit",
                            "href" => "?pruebasJUnit/show",
                        ],
                        
                        "05" => [
                            "title" => "Pruebas con JUnit" . " (2)",
                            "short" => "Pruebas con JUnit" . " (2)",
                            "href" => "?pruebasJUnit2/show",
                        ],
                        
                        "06" => [
                            "title" => "JavaDoc",
                            "short" => "JavaDoc",
                            "href" => "?javaDoc/show",
                        ],
                        
                        "07" => [
                            "title" => "FlowLayout con JavaDoc",
                            "short" => "FlowLayaut con JavaDoc",
                            "href" => "?flowLayout/show",
                        ],
                        
                        // Falta todo el repaso del examen
                    ],
                ],
                
                3 => [
                    "title" => "Introdución a P.O.O.",
                    "short" => "Introdución a POO",
                    "href" => "?unit/show/5/3",
                    
                    "exs" => [
                        /*
                        "00" => [
                            "title" => "",
                            "short" => "",
                            "href" => "",
                        ],
                        */
                    ],
                ],
            ],
        ],
        
        6 => [
            "title" => "Desarrollo web en entorno cliente",
            "short" => "JavaScript",
            "href" => "?module/show/6",
            
            "ufs" => [
                // 1 => [],
                
                2 => [
                    "title" => "Estructuras definidas por el programador. Objetos",
                    "short" => "Definicion de estructuras",
                    "href" => "?unit/show/6/2",
                    
                    "exs" => [
                        "00.1" => [
                            "title" => "Ejercicios de Arrays",
                            "short" => "Arrays",
                            "href" => "?arrays/show",
                        ],
                        
                        "00.2" => [
                            "title" => "Ejercicios de Objetos",
                            "short" => "Objetos",
                            "href" => "?objetos/show",
                        ],
                        
                        "00.3" => [
                            "title" => "Ejercicios de Funcione",
                            "short" => "Funciones",
                            "href" => "?funciones/show",
                        ],
                        
                        "01.1" => [
                            "title" => "Programación mediante funciones. Sobrecarga de funciones",
                            "short" => "Sobrecarga de funciones",
                            "href" => "?sobrecarga/show",
                        ],
                        
                        "01.2" => [
                            "title" => "Programación mediante funciones y estructuras definidas por el programador",
                            "short" => "Programacion con funciones y estructuras definidas",
                            "href" => "?funcionesEstructuras/show",
                        ],
                        
                        "02.1" => [
                            "title" => "Ejercicios OOP y herencia",
                            "short" => "OOP y herencia",
                            "href" => "?OOPyHerencia/show",
                        ],
                        
                        "02.2" => [
                            "title" => "Ejercicios de canvas",
                            "short" => "Canvas",
                            "href" => "?canvas/show",
                        ],
                        
                        "02" => [
                            "title" => "Programacion mediante funciones y estructuras definidas por el programador" . " (2)",
                            "short" => "Programacion con funciones y estructuras definidas" . " (2)",
                            "href" => "?funcionesEstructuras2/show",
                        ],
                    ],
                ], 
                
                3 => [
                    "title" => "Eventos, manejo de formularios y modelo de objetos de documento",
                    "short" => "AJAX",
                    "href" => "?unit/show/6/3",
                    
                    "exs" => [
                        "00.1" => [
                            "title" => "Ejercicios AJAX",
                            "short" => "AJAX",
                            "href" => "?ajax/show",
                        ],
                        
                        "00.2" => [
                            "title" => "Primeros pasos con React",
                            "short" => "React",
                            "href" => "?react/show",
                        ],
                        
                        "01" => [
                            "title" => "Interactuar con el DOM. Operaciones basicas",
                            "short" => "DOM, operaciones basicas",
                            "href" => "?DOM/show",
                        ],
                    ],
                ],
            ],
        ],
        
        7 => [
            "title" => "Desarrollo web en entorno servidor",
            "short" => "PhP",
            "href" => "?module/show/7",
            
            "ufs" => [
                1 => [
                    "title" => "Introducción a PhP",
                    "short" => "Introducción",
                    "href" => "?unit/show/7/1",
                    
                    "exs" => [
                        "01" => [
                            "title" => "Captura de imagenes",
                            "short" => "",
                            "href" => "?captura/show",
                        ],
                        
                        "02" => [
                            "title" => "Generador de elementos HTML",
                            "short" => "",
                            "href" => "?htmlGenerator/show",
                        ],
                        
                        "03" => [
                            "title" => "Complejidad de las contraseñas",
                            "short" => "",
                            "href" => "?complejidad/show",
                            
                            "text" => [
                                "header1" => [
                                    "adiciones" => "Adiciones",
                                    "tipo" => "Tipo",
                                    "ratio" => "Ratio",
                                    "contador" => "Contador",
                                    "bonus" => "Bonus",
                                ]
                            ]
                        ],
                        
                        "04" => [
                            "title" => "Web Scraping",
                            "short" => "",
                            "href" => "?webScraping/show",
                        ],
                        
                        "05" => [
                            "title" => "Cotizaciones",
                            "short" => "",
                            "href" => "?cotizaciones/show",
                        ],
                        
                        "06" => [
                            "title" => "Idiomas",
                            "short" => "",
                            "href" => "?idiomas/show",
                        ],
                        
                        "07" => [
                            "title" => "Formulario de contacto",
                            "short" => "",
                            "href" => "?contacto/show",
                        ],
                        
                        "08" => [
                            "title" => "Formulario de registro",
                            "short" => "",
                            "href" => "?registro/show",
                        ],
                    ],
                ],
                
                2 => [
                    "title" => "Generación dinamica de paginas web",
                    "short" => "Generación dinamica",
                    "href" => "?unit/show/7/2",
                    
                    "exs" => [
                        "01" => [
                            "title" => "Libro de firmas",
                            "short" => "",
                            "href" => "?firmas/show",
                        ],
                        
                        "02" => [
                            "title" => "Formulario de registro y log-in",
                            "short" => "Registro y log-in",
                            "href" => "?registro/show",
                            
                            "text" => [
                                "email" => "Correo electronico:",
                                "pwd" => "Contraseña:",
                                "rptPwd" => "Repetir contraseña:",
                                "idType" => "Tipo de identificación:",
                                "id" => "Numero de identificacción:",
                                "name" => "Nombre:",
                                "sur" => "Apellido/os:",
                                "sex" => "Sexo:",
                                "male" => "Hombre",
                                "female" => "Mujer",
                                "date" => "Fecha de nacimiento:",
                                "addr" => "Dirección:",
                                "pCode" => "Codigo postal:",
                                "poblacion" => "Poblacion:",
                                "provincia" => "Provincia:",
                                "tel" => "Teléfono:",
                                "img" => "Imagen:",
                                "send" => "Enviar",
                            ],
                        ],
                        
                        "03" => [
                            "title" => "Mantenimiento",
                            "short" => "",
                            "href" => "?mantenimiento/show",
                        ],
                    ],
                ],
            ],
        ],
        
        8 => [
            "title" => "Despliegue de aplicaciones web",
            "short" => "Despliegue",
            "href" => "?module/show/8",
            
            "ufs" => [
                1 => [
                    "title" => "Implementación de arquitectura web",
                    "short" => "Arquitectura web",
                    "href" => "?unit/show/8/1",
                    
                    "exs" => [
                        "01" => [
                            "title" => "Creación del entorno",
                            "short" => "Creación del entrono",
                            "href" => "?creacionEntorno/show",
                            
                            /*"text" => [
                                "zone" => [
                                    "text1" => "",
                                    "text2" => "",
                                ],
                            ],*/
                        ],
                        
                        "02" => [
                            "title" => "VirtualHosts",
                            "short" => "VirtualHosts",
                            "href" => "?virtualHosts/show",
                        ],
                        
                        "03" => [
                            "title" => "Aceso autentificado con .htpasswd en Apache2",
                            "short" => "Aceso autentificado",
                            "href" => "?acesoAutentificado/show",
                        ],
                        
                        "04" => [
                            "title" => "Aceso seguro a Apache2: Certificado SSL + DNI (opcional)",
                            "short" => "Apache2 con SSL",
                            "href" => "?apacheSSL/show",
                        ],
                        
                        "05" => [
                            "title" => "Transferencia de ficheros con VSFTPD",
                            "short" => "VSFTPD",
                            "href" => "?VSFTPD/show",
                        ],
                        
                        "06" => [
                            "title" => "Aplicacion web usando Apache2 + PhP + MySQL",
                            "short" => "Aplicacion web",
                            "href" => "?aplicacionWeb/show",
                        ],
                    ],
                ],
                
                4 => [
                    "title" => "Control de versiones",
                    "short" => "Control de versiones",
                    "href" => "?unit/show/8/4",
                    
                    "exs" => [
                        "01" => [
                            "title" => "Practica Git",
                            "short" => "Git",
                            "href" => "?git/show",
                        ],
                    ],
                ],
            ],
        ],
        
        9 => [
            "title" => "Diseño de interfaces web",
            "short" => "Diseño web",
            "href" => "?module/show/9",
            
            "ufs" => [
                2 => [
                    "title" => "Elementos multimedia: Creación e integracion",
                    "short" => "Elementos multimedia",
                    "href" => "?unit/show/9/2",
                    
                    "exs" => [
                        "01" => [
                            "title" => "Generacion de contenido multimedia optimizado para la web. Imagenes",
                            "short" => "Contenido web, imagenes",
                            "href" => "?imagenesOptimizadas/show",
                        ],
                        
                        "02" => [
                            "title" => "Generacion de contenido multimedia optimizado para la web. Audio y video",
                            "short" => "Contenido web, audio y video",
                            "href" => "?audiovideo/show"
                        ],
                    ],
                ],
            ],
        ],
    ],
];

?>