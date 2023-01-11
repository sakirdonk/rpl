<div class="container">
    <div style="margin: auto; border: 1px solid #B5B7B9; background-color: #B5B7B9; border-radius: 10px; padding: 5%;">
        <h3 class="mb-4">FAQs</h3>
            <?php
            foreach($list_faq as $faq){
            ?>
            <h4 class="mt-4 pt-1 mb-0"><?= $faq->pertanyaan?></h4>
            <p><?= $faq->jawaban?></p>
            <?php } ?>
    </div>
</div>