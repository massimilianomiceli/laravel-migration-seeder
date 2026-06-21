<div class="card h-100 shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <strong>{{ $train['train_code'] }}</strong>

        @if ($train['is_cancelled'])
            <span class="badge text-bg-danger">Cancellato</span>
        @elseif ($train['is_on_time'])
            <span class="badge text-bg-success">In orario</span>
        @else
            <span class="badge text-bg-warning">In ritardo</span>
        @endif
    </div>

    <div class="card-body">
        <h5 class="card-title mb-3">
            {{ $train['departure_station'] }}
            <span class="text-muted">→</span>
            {{ $train['arrival_station'] }}
        </h5>

        <p class="card-text mb-2">
            <strong>Azienda:</strong> {{ $train['railway_company'] }}
        </p>

        <p class="card-text mb-2">
            <strong>Partenza:</strong>
            {{ $train['departure_time'] }}
        </p>

        <p class="card-text mb-2">
            <strong>Arrivo:</strong>
            {{ $train['arrival_time'] }}
        </p>

        <p class="card-text mb-0">
            <strong>Carrozze:</strong> {{ $train['total_carriages'] }}
        </p>
    </div>

    <div class="card-footer text-muted small">
        ID treno: {{ $train['id'] }}
    </div>
</div>
