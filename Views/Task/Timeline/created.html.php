<li class="lead-identified wrapper">
    <div class="figure"><span class="fa fa-tasks"></span></div>
    <div class="panel bg-default">
        <div class="panel-body">
            <p class="mb-0">
                <?php echo $view['translator']->trans('ddi.lead_actions.tasks.timeline.created',
                    array(
                        '%date%' => $view['date']->toFullConcat($event['timestamp']),
                        '%name%' => $event['extra']['name']));
                ?>
            </p>
        </div>
    </div>
</li>