<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Team-manager</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      </head>
    <body>
        <div class="container-fluid">
          <div class="row">
            <div class="col-8">
              <table class="table table-dark table-striped table-bordered text-center">
                <thead>
                  <tr>
                    <th scope="col">Задача</th>
                    <th scope="col">Отдел</th>
                    <th scope="col">Изпълнители</th>
                    <th scope="col">Зависимости към други задачи</th>
                    <th scope="col">Изпълнено</th>
                    <th scope="col">Бележки</th>
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
                    <td>
                      <button type="button" class="btn btn-outline-warning">Редактирай</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Да се направи дизайн</td>
                    <td>дизайнери</td>
                    <td>Пешо Станка</td>
                    <td>Да се изготви спецификация</td>
                    <td>Да</td>
                    <td></td>
                    <td>
                      <button type="button" class="btn btn-outline-warning">Редактирай</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Да се разпише front-end</td>
                    <td>front-end</td>
                    <td>Марийка Кольо Иво</td>
                    <td>Да се направи дизайн</td>
                    <td>Не</td>
                    <td></td>
                    <td>
                      <button type="button" class="btn btn-outline-warning">Редактирай</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Да се разпише back-end</td>
                    <td>back-end</td>
                    <td>Васил Алекс</td>
                    <td>Да се разпише front-end</td>
                    <td>Не</td>
                    <td></td>
                    <td>
                      <button type="button" class="btn btn-outline-warning">Редактирай</button>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="6">
                      <button type="button" class="btn btn-primary btn-block">Добави задача</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-4">
              <table class="table table-dark table-striped table-bordered text-center">
                <tbody>
                  <tr>
                    <td>Име на проекта:</td>
                    <td>Проект Даниана</td>
                  </tr>
                  <tr>
                    <td>екип:</td>
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
                    <td>Проценти на изпълнените задачи:</td>
                    <td>38%</td>
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
    </body>
</html>
