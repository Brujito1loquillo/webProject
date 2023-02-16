<?php

$lang = [
    "web" => [
        "title" => "JPRibelles",
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
        [
            "M" => 7,
            "UF" => 1,
            "EX" => "01",
        ],
    ],
];

?>