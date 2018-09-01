<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Team-manager</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

      </head>
    <body class="bg-info">
        <div id="container" class="container-fluid mt-3">
          <div class="row">
            <div class="col-8">
              <table class="table table-dark table-striped table-bordered text-center">
                <thead>
                  <tr>
                    <th scope="col">
                      <i class="fa fa-tasks" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Задачи"></i>
                    </th>
                    <th scope="col">
                      <i class="fa fa-briefcase" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Отдел"></i>
                    </th>
                    <th scope="col">
                      <i class="fa fa-users" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Изпълнител/и"></i>
                    </th>
                    <th scope="col">
                      <i class="fa fa-link" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Зависимости към други задачи"></i>
                    </th>
                    <th scope="col">
                      <i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Изпълнена ли е задачата?">?</i>
                    </th>
                    <th scope="col">
                      <i class="fa fa-comment" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Записка към задачата"></i>
                    </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Да се изготви спецификация</td>
                    <td>Маркетинг</td>
                    <td>чичо Скрудж</td>
                    <td>Няма</td>
                    <td>Да</td>
                    <td></td>
                    <td class="d-flex border-0 justify-content-around">
                      <button @click="updateTask" type="button" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Редактирай задачата">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                      </button>
                      <button @click="removeTask" type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Изтрий задачата">
                        <i class="fa fa-ban" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Да се направи дизайн</td>
                    <td>дизайнери</td>
                    <td>Пешо Станка</td>
                    <td>Да се изготви спецификация</td>
                    <td>Да</td>
                    <td></td>
                    <td class="d-flex border-0 justify-content-around">
                      <button @click="updateTask" type="button" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Редактирай задачата">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                      </button>
                      <button @click="removeTask" type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Изтрий задачата">
                        <i class="fa fa-ban" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Да се разпише front-end</td>
                    <td>front-end</td>
                    <td>Марийка Кольо Иво</td>
                    <td>Да се направи дизайн</td>
                    <td>Не</td>
                    <td></td>
                    <td class="d-flex border-0 justify-content-around">
                      <button @click="updateTask" type="button" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Редактирай задачата">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                      </button>
                      <button @click="removeTask" type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Изтрий задачата">
                        <i class="fa fa-ban" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Да се разпише back-end</td>
                    <td>back-end</td>
                    <td>Васил Алекс</td>
                    <td>Да се разпише front-end</td>
                    <td>Не</td>
                    <td></td>
                    <td class="d-flex border-0 justify-content-around">
                      <button @click="updateTask" type="button" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Редактирай задачата">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                      </button>
                      <button @click="removeTask" type="button" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Изтрий задачата">
                        <i class="fa fa-ban" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="7">
                      <button @click="addNewTask" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Добави нова задача">
                        <i class="fa fa-plus"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-4">
              <table class="table table-dark table-striped table-bordered text-center">
                <tbody>
                  <tr>
                    <td>@{{title}}</td>
                  </tr>
                  <tr>
                    <td>
                      <ul>
                        <li>чичо Скрудж - Маркетинг</li>
                        <li>Пешо - дизайнер</li>
                        <li>Станка - дизайнер</li>
                        <li>Марийка - front-end</li>
                        <li>Кольо - front-end</li>
                        <li>Иво - front-end</li>
                        <li>Васил - back-end</li>
                        <li>Алекс - back-end</li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h2>Финализиране на проекта</h2>
                      <div class="progress">
                        <div class="progress-bar-animated progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <!-- popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- custom -->
        <script src="./js/app.js"></script>
        <!-- vue.js -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

        <script type="text/javascript">
          const vue = new Vue({
            el: '#container',
            data: {
              title: 'Проект Даниана'
            },
            methods: {
              addNewTask: function(e){
                alert(e.target);
              },
              removeTask: function(e){
                alert(e.target);
              },
              updateTask: function(e){
                alert(e.target);
              }
            }
          });
        </script>
    </body>
</html>
