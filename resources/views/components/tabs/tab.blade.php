<div class="card card-custom">
    <div class="card-header card-header-tabs-line">

        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                {{ $tabTitle }}
            </ul>
        </div>
        <div class="card-title">
            {{ $cardTitle }}
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            {{ $body }}
        </div>
    </div>
</div>

<style>
    .tab-pane{
        background-color: white;
    }
</style>
