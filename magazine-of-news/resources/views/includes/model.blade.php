@section('model')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="@show" method="post">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="recipient-name" name="product">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Ваша почта:</label>
                        <input class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Ваш номер телефона:</label>
                        <input class="form-control" id="tel" name="tel">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Ваше имя:</label>
                        <input class="form-control" id="name" name="name">
                    </div>
                    <div class="amount form-group mt-3">
                        <label for="message-text" class="form-control-label">Количество:</label>
                        <button class="decrease" type="button">-</button>
                        <input type="text" name="count" value="1" />
                        <button class="increase" type="button">+</button>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Сообщения:</label>
                        <textarea class="form-control" id="message-text" name="message"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <input class="btn btn-success" type="submit" value="Заказать">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
