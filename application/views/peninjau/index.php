<body class="theme-blue">
    
    
    
    
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD JADWAL PENINJAUAN</h2>
            </div>

            <!-- Widgets -->
            
            <div id="kalender">

            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            

            
        </div>
        
        <script type="text/javascript">
            //Jquery
            $(document).ready(function () {
                var jadwal        = '<?php echo $jadwal; ?>';
               var kalender = $('#kalender').fullCalendar({
                editable: false,
                header: {
                    left : 'prev, next day',
                    center : 'title',
                    right: 'month, agendaWeek, agendaDay'
                },
                 events: JSON.parse(jadwal),
                 allDayDefault: true,
                 selectable:true,
               });
            });
        </script>
    </section>