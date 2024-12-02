<p align="center"><a href="https://laravel.com" target="_blank"><img src="./docs/assets/jucux.png" width="150" alt="Laravel Logo"></a></p>

<p align="center">
<img src="https://img.shields.io/badge/license-MIT-green" alt="License"></img>
<img src="https://img.shields.io/badge/powered_by-Laravel-red" alt="License"></img>
</p>

# El Ordenador ToDoListo

To Do List desarrollado por el equipo JUCUX para practicar el trabajo en equipo desarrollando aplicaciones en Laravel.

> Mi mamá me mima, el ordenador me ordena

To Do List con funcionalidades de inteligencia artificial y transformación de texto a voz. 
Almacena tareas de forma organizada en base a la estructura de una oración imperativa o exhortativa.
Organiza tareas en las distintas áreas de la vida de una persona.

## Features

Las siguientes son características y requerimientos que se espera que el proyecto tenga al finalizar:

- Que sea personal y use el nombre que las madres usan al regañar (Ernesto Carlos Arena Alarcon, saca la basura)
- Que use un diccionario de verbos que autocomplete la acción a ordenar en modo imperatibo (Saca, Barre, Compra, Lleva, Toma, Haz, Implementa)
- Que se lea en forma de orden en momentos específicos o aleatorios
- Usar librería spoken by stephenlb o text to speech api del navegador
- Usar groqcloud en el backend para clasificar tareas en grupos definidos por el usuario (La IA debe ver dónde encaja mejor o sugerir nuevas clasificaciones)
- Usar groqcloud para generar mensajes de regaño respecto a las tareas más recientes una vez cada hora (No usar sockets, sólo actualizar el sitio automaticamente con un mensaje en la request que pida generar mensaje)
- No debe usar filament ni tener frontend en Vue. Únicamente tailwind y librerías agnósticas del framework de javascript

## Contributing

Para poder contribuir clona el proyecto y configúralo siguiendo las instrucciones de Laravel (Ya que este proyecto usa las funcionalidades básicas del framework).

## License

Este proyecto se encuentra bajo licencia [MIT license](https://opensource.org/licenses/MIT).
