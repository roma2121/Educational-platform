document.addEventListener('DOMContentLoaded', function(){


  var taskSection = document.querySelector('#tasks-sec');
  if(taskSection){
    taskSection.addEventListener('click', sectionHandler);

    function sectionHandler(event){
      // console.log(event.target);

      if(event.target.classList.contains('task__watched')){

        var btn = event.target;
        var taskId = btn.parentNode.getAttribute('data-task-id');
        var watchedCounter = document.querySelector('#watched-count');
        var currentCount = watchedCounter.textContent;

        doAjax({
          method: 'POST',
          url: 'logic/watched_task.php',
          data: 'watched_id=' + taskId,
          contentType: 'application/x-www-form-urlencoded',
          callback: function(){
            if( btn.classList.contains('task__watched_active') ){
              btn.textContent = '(Не смотрел)';
              --currentCount;
            }else{
              btn.textContent = '(Смотрел)';
              ++currentCount;
            }

            btn.classList.toggle('task__watched_active');
            watchedCounter.textContent = currentCount;

          }
        });

      }

      if(event.target.classList.contains('task__del')){
        event.preventDefault();

        var task = {};

        task.container = event.target.parentNode;
        task.id = task.container.getAttribute('data-task-id');
        mtask.title = task.container.firstElementChild.textContent;

        doAjax({
          method: 'POST',
          url: 'logic/del_task.php',
          data: 'del_id=' + task.id,
          contentType: 'application/x-www-form-urlencoded',
          callback: delTask
        });

        function delTask(response){
          if(response){
            alert('Задание ' + task.title + ' был успешно удален!');
            task.container.nextElementSibling.remove() //Удалить горизонтальную линию
            task.container.remove()
          }else{
            alert('Во время удаления задания что-то пошло не так');
          }
        }

      }

    }

  }

  var moreBtn = document.querySelector('#showMore');
  if(moreBtn){

    moreBtn.addEventListener('click', showMoreTasks);

    var lastShownTask = 0;

    function showMoreTasks(){
      lastShownTask++;

      doAjax({
        method: 'POST',
        url: 'logic/more_tasks.php',
        data: 'last_shown_task=' + lastShownTasks,
        contentType: 'application/x-www-form-urlencoded',
        callback: appendTask
      });

      function appendTask(task){
        task = JSON.parse(task);

        if(task){
          var title = document.createElement('h4');
          var link = document.createElement('a');
          link.href = 'tasks.php#task_' + task.id;
          link.textContent = task.title;

          title.appendChild(link);
          document.body.appendChild(title);
        }else{
          moreBtn.textContent = 'Заданий больше нет :(';
          moreBtn.setAttribute('disabled', 'disabled');
        }

      }

    }

  }

  if(document.forms.newTask){
    document.forms.newTask.addEventListener('submit', addNewTask);

    function addNewTask(event){
      event.preventDefault();

      var formData = new FormData(this);

      doAjax({
        method: 'POST',
        url: 'logic/add_task.php',
        data: formData,
        callback: function(response){
          alert(response);
        }
      });

    }

  }
});