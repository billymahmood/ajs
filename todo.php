<!doctype html>
<html ng-app="todoApp">
    <head>
        <script src="js/angular.js"></script>
        <script src="js/todo.js"></script>
        <link rel="stylesheet" href="css/todo.css">
    </head>
    <body>
        <nav>
            <?php require_once 'php/nav.php'; ?>
        </nav>
        
        <div ng-controller="TodoController">
            <h2>Todo</h2>
            <span>{{remaining()}} of {{todos.length}} remaining</span>
            [ <a href="" ng-click="archive()">archive</a> ]
            <ul class="unstyled">
                <li ng-repeat="todo in todos">
                    <input type="checkbox" ng-model="todo.done">
                    <span class="done-{{todo.done}}">{{todo.text}}</span>
                </li>
            </ul>
            <form ng-submit="addTodo()">
                <input type="text" ng-model="todoText"  size="30"
                       placeholder="add new todo here">
                <input class="btn-primary" type="submit" value="add">
            </form>
        </div>
    </body>
</html>