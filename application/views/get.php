<div class="span10">
    <article>
        <h1><?=$topic->title?></h1>
        <div>
            <div><?=$topic->created?></div>
            <?=auto_link($topic->description)?>
        </div>
    </article>
</div>