<form action="/index.php/topic/add" method="post" class="span10">
    <?php echo validation_errors() ?>
    제목 : <input type="text" name="title" placeholder="제목" class="span12">
    본문 :
    <textarea name="description" placeholder="본문" class="span12" rows="10"></textarea>
    <input type="submit" class="btn">
</form>