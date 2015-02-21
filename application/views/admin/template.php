<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('admin/header'); ?>
    <body>
        <section id="container" >
            <?php
                $this->load->view('admin/header_menu');
                $this->load->view('admin/sidebar');
            ?>
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper site-min-height">
                    <?php $this->load->view($view) ?>
                </section>
            </section>
            <?php $this->load->view('admin/footer') ?>
        </section>

        <?php $this->load->view('admin/js') ?>
        <script>
            //custom select box

            $(function () {
                $('select.styled').customSelect();
            });

            $('#<?= $active['menu'] ?>').addClass('active');
            $('#<?= $active['submenu'] ?>').addClass('active');

        </script>

    </body>
</html>