{extends file="project_base.tpl"}

{block name="style"}
    <link rel="stylesheet" type="text/css" href="{$app_url}ui/lib/gantt/style.css" />
{/block}

{block name="project_content"}
    <h3>{$project->name}</h3>
    <div class="hr-line-dashed"></div>
    <div class="gantt"></div>
{/block}


{block name="script"}
    <script type="text/javascript" src="{$app_url}ui/lib/gantt/jquery.fn.gantt.min.js"></script>
    <script>
        $(function () {
            var demoSource = [
                {
                name: "{$project->name}",
                desc: "Tasks",
                values:
                    [
                    {foreach $tasks as $task}
                        {
                            from: {strtotime($task->started)}000,
                            to: {strtotime($task->due_date)}000,
                            label: "{$task->title}",
                            customClass: "ganttRed"
                        },
                    {/foreach}
                    ]
                },
            ];

            // shifts dates closer to Date.now()
            var offset = new Date().setHours(0, 0, 0, 0) -
                new Date(demoSource[0].values[0].from).setDate(35);
            for (var i = 0, len = demoSource.length, value; i < len; i++) {
                value = demoSource[i].values[0];
                value.from += offset;
                value.to += offset;
            }

            $(".gantt").gantt({
                source: demoSource,
                navigate: "scroll",
                scale: "weeks",
                maxScale: "months",
                minScale: "hours",
                itemsPerPage: 10,
                scrollToToday: false,
                useCookie: true,
                onItemClick: function(data) {
                    // alert("Item clicked - show some details");
                },
                onAddClick: function(dt, rowId) {
                    // alert("Empty space clicked - add an item!");
                },
                onRender: function() {
                    if (window.console && typeof console.log === "function") {
                        console.log("chart rendered");
                    }
                }
            });

            // $(".gantt").popover({
            //     selector: ".bar",
            //     title: function _getItemText() {
            //         return this.textContent;
            //     },
            //     container: '.gantt',
            //     content: "Here's some useful information.",
            //     trigger: "hover",
            //     placement: "auto right"
            // });
        });
    </script>
{/block}