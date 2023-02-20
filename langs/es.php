<?php

$lang = [
    "web" => [
        "title" => "JPRibelles",
        
        "text" => [
            "see" => "Ver más",
            "goHome" => "Volver al inicio",
        ],
    ],
    
    "exception" => [
        "title" => "Ha ocurrido un error inesperado",
    ],
    
    "home" => [
        "title" => "Inicio",
        
        "text" => [
            "news" => "Noticias",
            "destacados" => "Destacados",
        ],
    ],
    
    "practics" => [
        /*
        MOD_NUM => [
            "title" => "",
            "short" => "",
            "href" => "?module/show/$MOD_NUM",
            
            "ufs" => [
                UF_NUM => [
                    "title" => "",
                    "short" => "",
                    "href" => "?module/show/$MOD_NUM/$UF_NUM",
                    
                    "exs" => [
                        EX_NUM => [
                            "title" => "",
                            "short" => "",
                            "href" => "",
                            
                            "text" => [
                                "text1" => "",
                            ],
                        ],
                    ],
                ],
            ],
        ],
        */
        
        7 => [
            "title" => "Desarrollo web en entorno servidor",
            "short" => "PhP",
            "href" => "?module/show/7",
            
            "ufs" => [
                1 => [
                    "title" => "Introducción a PhP",
                    "short" => "Introducción",
                    "href" => "?module/show/7/1",
                    
                    "exs" => [
                        "01" => [
                            "title" => "Captura de imagenes externas",
                            "short" => "Captura de imagenes",
                            "href" => "?captura/show",
                            
                            "text" => [
                                "buscar" => "Buscar",
                            ],
                        ],
                        
                        "02" => [
                            "title" => "Generador de elementos HTML",
                            "short" => "",
                            "href" => "",
                            
                            "text" => [
                                "text1" => "",
                            ],
                        ],
                        
                        "03" => [
                            "title" => "Complejidad de las contraseñas",
                            "short" => "",
                            "href" => "",
                            
                            "text" => [
                                "text1" => "",
                            ],
                        ],
                        
                        "04" => [
                            "title" => "Web scraping",
                            "short" => "",
                            "href" => "",
                            
                            "text" => [
                                "text1" => "",
                            ],
                        ],
                        
                        "05" => [
                            "title" => "Cotizaciones",
                            "short" => "",
                            "href" => "",
                            
                            "text" => [
                                "text1" => "",
                            ],
                        ],
                        
                        "06" => [
                            "title" => "Idiomas",
                            "short" => "",
                            "href" => "",
                            
                            "text" => [
                                "text1" => "",
                            ],
                        ],
                        
                        "07" => [
                            "title" => "Formulario de contacto",
                            "short" => "",
                            "href" => "?contact/show",
                            
                            "text" => [
                                "name" => "Nombre",
                                "surname" => "Apellido",
                                "email" => "Correo electronico",
                                "message" => "Mensaje",
                                "why" => "Razón del mensaje",
                                "issiue" => "Error o fallo",
                                "imprube" => "Propuesta de mejora",
                                "other" => "Otro",
                                "device" => "Seleccione su dispositivo",
                                "select" => "Seleccione un dispositivo",
                                "pc" => "Ordenador",
                                "phone" => "Telefono",
                                "tablet" => "Tablet",
                                "send" => "Enviar",
                                "sended" => "El mensaje ha sido enviado",
                                "errors" => [
                                    "vName" => "El nombre es un campo obligatorio",
                                    "bName" => "El nombre contiene caracteres no validos",
                                    "vSurname" => "El apellido es un campo obligatorio",
                                    "bSurname" => "El apellido contiene caracteres no validos",
                                    "vEmail" => "El correo es un campo obligatorio",
                                    "bEmail" => "El correo no es correcto o contiene caracteres no validos",
                                    "vMessage" => "El mensaje es un campo obligatorio",
                                    "vWhy" => "Debe selecionar el motivo por el que contacta con el administrador",
                                    "bDevice" => "Debe selecionar una opcion",
                                ],
                            ],
                        ],
                        
                        "08" => [
                            "title" => "Formulario de registro",
                            "short" => "",
                            "href" => "?register/show",
                            
                            "text" => [
                                "userAndPasswd" => "Usuario y contraseña",
                                "username" => "Nombre de usuario / Correo electronico",
                                "passwd" => "Contraseña",
                                "repeatPasswd" => "Repite la contraseña",
                                "personal" => "Infromación personal",
                                "dni" => "DNI",
                                "name" => "Nombre",
                                "surname" => "Apellido",
                                "birth" => "Fecha de nacimiento",
                                "gender" => "Sexo",
                                "male" => "Hombre",
                                "female" => "Mujer",
                                "dir" => "Dirección",
                                "adr" => "Direción",
                                "pcode" => "Codigo postal",
                                "loc" => "Localidad",
                                "prov" => "Provincia",
                                "phone" => "Numero de teléfono",
                                "userImage" => "Imagen de perfil",
                                "image" => "Imagen",
                                "send" => "Enviar",
                                "opc" => "Información opcional",
                                "errors" => [
                                    "dImage" => "Ha ocurrido algun problema con el directorio de las imagenes de perfil.\n Por favor, <a href=\"?contact/show\">contacte con el administrador</a>. Muchas gracias."
                                ],
                            ],
                        ],
                    ],
                ],
                
                2 => [
                    "title" => "",
                    "short" => "",
                    "href" => "?module/show/7/2",
                    
                    "exs" => [
                        "01" => [
                            "title" => "Libro de firmas",
                            "short" => "",
                            "href" => "",
                            
                            "text" => [
                                "text1" => "",
                            ],
                        ],
                        
                        "02" => [
                            "title" => "Formulario de registro e inicio de sesión.",
                            "short" => "",
                            "href" => "",
                            
                            "text" => [
                                "text1" => "",
                            ],
                        ],
                        
                        "03" => [
                            "title" => "Mantenimiento",
                            "short" => "",
                            "href" => "",
                            
                            "text" => [
                                "text1" => "",
                            ],
                        ],
                        
                        "06" => [
                            "title" => "Chat",
                            "short" => "",
                            "href" => "",
                            
                            "text" => [
                                "text1" => "",
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    
    "news" => [
        [
            "title" => "V 0.6",
            "texto" => "Inauguramos la nueva versión de la web, nada que ver con que fallara en cascada estrepitosamente y tuviera que reempezar por 6 vez.",
        ],
    ],
    
    "destacados" => [
        "lang.practics.7.ufs.1.exs.08",
        "lang.practics.7.ufs.1.exs.07",
        
        // "lang.practics.7.ufs.1.exs.01",
        // "lang.practics.7.ufs.1.exs.02",
        // "lang.practics.7.ufs.1.exs.03",
        // "lang.practics.7.ufs.1.exs.04",
        // "lang.practics.7.ufs.1.exs.05",
        // "lang.practics.7.ufs.1.exs.06",
        
        // "lang.practics.7.ufs.2.exs.01",
        "lang.practics.7.ufs.2.exs.02",
        "lang.practics.7.ufs.2.exs.03",
        "lang.practics.7.ufs.2.exs.06",
    ],
];

?>