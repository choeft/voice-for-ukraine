<?= $this->extend('default') ?>

<?= $this->section('content') ?>
    <style>
        div[data-acc-content] { display: none;  }
        div[data-acc-step]:not(.open) { background: #f2f2f2;  }
        div[data-acc-step]:not(.open) h5 { color: #777;  }
        div[data-acc-step]:not(.open) .badge-primary { background: #ccc;  }
    </style>

    <?= $this->include('home/text') ?>
    <?= $this->include('home/form') ?>
    <?= $this->include('home/modal') ?>

<?= $this->endSection() ?>

<?= $this->section('javascript') ?>

    <script>
        $(function() {
            new ClipboardJS('.btn');
            $( "#accordion" ).accordionForm({
                mode: 'accordion',
                autoButtonsNextClass: 'btn btn-primary float-right',
                autoButtonsPrevClass: 'btn btn-light',
                stepNumberClass: 'badge badge-pill badge-primary mr-1',
                autoButtonsSubmitText: 'Get template',
                onSubmit: function() {
                    var form = $(this);

                    $.ajax({
                        type: "POST",
                        url: '/voice-for-ukraine/public/render',
                        data: $('#accordion').serialize(), // serializes the form's elements.
                        success: function(data)
                        {
                            $("#main_text").html(data);
                            $("#template_modal").modal('show');
                        },
                        error: function (data) {
                            alert('Something went wrong. Please try again.')
                        }
                    });

                    return false;
                }
            });
        });
    </script>

<?= $this->endSection() ?>
