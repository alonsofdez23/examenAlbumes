## EXAMEN PRIMERA EVALUACIÓN (2021/22) 4-ABR-2021
Escribir una aplicación de gestión musical que permita al usuario gestionar la información de su discoteca musical.

Se pide:

1. (1 puntos) Crear la base de datos mediante migraciones con las siguientes tablas:

    - *albumes (**id**, titulo, anyo)*

    - *artistas (**id**, nombre)*

    - *temas (**id**, titulo, anyo, duracion)*

    - *album_tema (**album_id, tema_id**)*

    - *artista_tema (**artista_id, tema_id**)*

    *Indicación*: la columna duración debe ser de tipo intervalo.

2. (1,5 puntos) Crear los modelos correspondientes y todas las relaciones adecuadas entre ellos, así como los CRUD de álbumes y temas.
3. (1,5 punto) Incorporar una regla de validación que impida en todo momento que un albúm pueda tener temas que no tengan ningún artista asociado.
4. (1,5 puntos) En la vista `albumes/view/id`, mostrar también los temas que componen cada álbum, indicando además (en el `DetailView` del álbum) la duración total del álbum, calculado como la suma de las duraciones de todos sus temas. *Indicación*: la suma la tiene que hacer el SGBD, no el PHP.
5. (1,5 puntos) En la vista `temas/index`, mostrar una columna con el número de artistas que tiene cada tema y otra con el número de álbumes en los que aparece cada tema, permitiendo filtrar y ordenar por dichas columnas.
6. (1,5 puntos) Crear la vista `artistas/albumes/id`, que muestre el nombre del artista identificado por su `id` y el nombre de todos los álbumes en los que ha participado ese artista.
7. (1,5 puntos) Impedir que se pueda borrar un artista si ha participado en algún tema que esté incorporado en algún álbum.

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
