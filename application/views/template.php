<!DOCTYPE html>
<html>
    <?php $this->load->view('header'); ?>
    <body>
        <div class="container">
            <?php
                $this->load->view('header_menu');
                $this->load->view('carousel');
            ?>
            <div class="row">
                <?php $this->load->view('panel') ?>
                <div class="col-sm-9">
                    <?php $this->load->view($view) ?>
                </div>
            </div>
            <?php $this->load->view('footer')  ?>
        </div>

        <?php $this->load->view('js') ?>
    </body>
</html>
