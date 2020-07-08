<html >
   <head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
     

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link rel="stylesheet"  href="style.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
   
   </head>
   <body ng-app="myApp">
    
        
	 <div class="row">
    	<div class="container">
            
    		<strong><h1>Task Manager</a></h1></strong>
    		<div class="col-sm-9">
                <div class="widget-box" id="recent-box" ng-controller="tasksController">
                    <div class="widget-header header-color-blue">
                    <div class="row">
                    <div class="col-sm-6">
                    <h4 class="bigger lighter">
                        <i class="glyphicon glyphicon-align-justify"></i>&nbsp;
                        TASK MANA00GER
                    </h4>
                    </div>
                    
                    
                    <div class="col-sm-3">
                    <button ng-click="addNewClicked=!addNewClicked;" class="btn btn-sm btn-danger header-elements-margin"><i class="glyphicon  glyphicon-plus"></i>&nbsp;Add New Task</button>
                    </div>
                    </div></div>
                    <div class="widget-body ">
                    <form ng-init="addNewClicked=false; " ng-if="addNewClicked" id="newTaskForm" class="add-task">
                    <div class="form-actions">
                    <div class="input-group">
                    <input type="text" class="form-control" name="comment" ng-model="taskInput" placeholder="Add New Task" ng-focus="addNewClicked">
                    <div class="input-group-btn">
                    <button class="btn btn-default" type="submit" ng-click="addTask"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New Task</button>
                    </div>
                    </div>
                    </div>
                    </form>
                    <div class="task">
                        <label class="checkbox">
                        <input  type="checkbox" value="" ng-checked="" /> 
                        <span ng-class="strike" > {task 1}</span>
                        <a ng-click="deleteTask" class="pull-right"><i class="glyphicon glyphicon-trash"></i></a>
                    
                     </label>
                    </div>
                    </div>
                    </div>
    </div>

</div>
</div>

<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="app/app.js"></script>
</body>
</html>
        
       
          
      
    