<section class="tasks-status">
    <div class="tasks-status-container">
        <span class="tasks-status-title">Status das tasks</span>

        <div class="tasks-status-content">
            @foreach ($tasksData as $key => $item)
            <div class="tasks-status-item">
                <div class="tasks-status-item-content">
                    <span class="tasks-status-item-count {{ strtolower(str_replace(' ', '-', $key)) }}">{{ count($item) }}</span>
                    <span class="tasks-status-item-name">{{ $key }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
