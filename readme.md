# Задача

Здравствуйте! Перед Вами стоит следующая задача: написать небольшой REST API сервис для сайта на вордпрессе. Нужно 
сделать так, чтобы по запросу на URL `/wp-api/posts` приходил ответ в виде **всех постов, где у каждого объекта поста
 есть поля 'название' и 'ccылка'**, должен быть JSON такого вида: 
```
{
  "posts":[
    {
      "title":"Just a post",
      "link":"http://ais-wp-int.au/just-a-post/"
    },
    {
      "title":"Hello world!",
      "link":"http://ais-wp-int.au/hello-world/"
    }
  ]
}
```
То есть это и есть правильный ответ :)

Код нужно писать в папке `wp-content/themes/twentynineteen/inc/rest-api`.
Главный файл - `rest-api-manager.php`. Вы можете писать весь код в нем или создать еще файлы в папке `rest-api` - как
 Вам будет удобнее.
 
Файл SQL для сайта находится в корне проекта - `ais_wp_int.sql`. Это дефолтный дамп базы вордпресса, там лишь 
добавлен один пост с названием `Just a post`.