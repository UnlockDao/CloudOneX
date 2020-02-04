{extends file="project_base.tpl"}

{block name="project_content"}


    <div class="row">
        <div class="col-md-12">
            <h3>Tasks by status</h3>
            <div class="hr-line-dashed"></div>

            <div id="tasks_by_status"></div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="hr-line-dashed"></div>
            <h3>Completed tasks last 7 days</h3>
            <div class="hr-line-dashed"></div>

            <div id="task_counts"></div>
        </div>
    </div>


{/block}

{block name="script"}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>



        $(function () {

            var task_counts_options = {
                chart: {
                    type: 'bar',
                    height: 400
                },
                series: [{
                    name: 'sales',
                    data: [
                        {foreach $task_counts as $task_count}
                        {$task_count},
                        {/foreach}
                    ]
                }],
                xaxis: {
                    categories: [
                        {foreach $last_7_days as $day}
                        '{$day}',
                        {/foreach}
                    ],
                    axisBorder: {
                        show: false
                    },

                }
            };

            var task_counts_chart = new ApexCharts(document.querySelector("#task_counts"), task_counts_options);

            task_counts_chart.render();

            var tasks_by_status_options = {
                chart: {
                    width: 500,
                    type: 'pie',
                },
                labels: ['Not Started', 'Completed', 'In Progress', 'Deferred', 'Waiting on someone else'],
                series: [
                    {$task_status_counts['not_started']}, {$task_status_counts['completed']}, {$task_status_counts['in_progress']}, {$task_status_counts['deferred']}, {$task_status_counts['waiting']}
                ],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            }

            var tasks_by_status_chart = new ApexCharts(
                document.querySelector("#tasks_by_status"),
                tasks_by_status_options
            );

            tasks_by_status_chart.render();


        });
    </script>
{/block}