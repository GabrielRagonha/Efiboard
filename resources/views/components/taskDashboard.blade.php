<section class="dashboard">
    <div class="dashboard-container">
        <div class="dashboard-filter">
            <ul class="dashboard-filter-list">
                <li class="dashboard-filter-item">
                    <button class="dashboard-filter-button">
                        Todas
                    </button>
                </li>

                <li class="dashboard-filter-item">
                    <button class="dashboard-filter-button">
                        Abertas
                    </button>
                </li>

                <li class="dashboard-filter-item">
                    <button class="dashboard-filter-button">
                        Fechadas
                    </button>
                </li>
            </ul>

            <div class="dashboard-filter-search">
                <input class="dashboard-filter-input" type="text" placeholder="Busque sua tarefa" />
            </div>
        </div>

        <div class="dashboard-content">
            <table class="dashboard-table">
                <thead class="dashboard-table-head">
                    <tr class="dashboard-table-head-row">
                        <th class="dashboard-table-head-item status">Status</th>
                        <th class="dashboard-table-head-item urgency">Urgência</th>
                        <th class="dashboard-table-head-item name">Nome</th>
                        <th class="dashboard-table-head-item deadline">Prazo final</th>
                        <th class="dashboard-table-head-item estimated">Tempo estimado</th>
                        <th class="dashboard-table-head-item spent">Horas realizadas</th>
                        <th class="dashboard-table-head-item created">Data de criação</th>
                        <th class="dashboard-table-head-item assignees">Responsáveis</th>
                        <th class="dashboard-table-head-item creator">Criador</th>
                    </tr>
                </thead>

                <tbody class="dashboard-table-body">
                    @foreach ($tasksData as $key => $item)
                        @foreach ($item as $task)
                            <tr class="dashboard-table-body-row">
                                <td
                                    class="dashboard-table-body-item status {{ strtolower(str_replace(' ', '-', $key)) }}">
                                    {{ $key }}
                                </td>

                                <td class="dashboard-table-body-item urgency">
                                    @if (isset($task['priority']))
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23"
                                            fill="none">
                                            <path fill="{{ $task['priority']['color'] }}"
                                                d="M11.583 19.166a7.667 7.667 0 1 0 0-15.333 7.667 7.667 0 0 0 0 15.333Zm0 1.917A9.583 9.583 0 0 1 2 11.5a9.583 9.583 0 0 1 9.583-9.584 9.583 9.583 0 0 1 9.584 9.584 9.583 9.583 0 0 1-9.584 9.583Zm-.958-5.75h1.917v1.917h-1.917v-1.917Zm0-9.583h1.917v7.666h-1.917V5.75Z" />
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23"
                                            fill="none">
                                            <path fill="#D8D8D8"
                                                d="M11.583 19.166a7.667 7.667 0 1 0 0-15.333 7.667 7.667 0 0 0 0 15.333Zm0 1.917A9.583 9.583 0 0 1 2 11.5a9.583 9.583 0 0 1 9.583-9.584 9.583 9.583 0 0 1 9.584 9.584 9.583 9.583 0 0 1-9.584 9.583Zm-.958-5.75h1.917v1.917h-1.917v-1.917Zm0-9.583h1.917v7.666h-1.917V5.75Z" />
                                        </svg>
                                    @endif
                                </td>

                                <td class="dashboard-table-body-item name">
                                    {{ $task['name'] }}
                                </td>

                                <td class="dashboard-table-body-item deadline">
                                    @if (isset($task['']))
                                        {{ date('d/m/Y', $task[''] / 1000) }}
                                    @else
                                        Sem prazo
                                    @endif
                                </td>

                                <td class="dashboard-table-body-item estimated">
                                    @if (isset($task['time_estimate']))
                                        {{ date('H:i:s', $task['time_estimate'] / 1000) }}
                                    @else
                                        00:00:00
                                    @endif
                                </td>

                                <td class="dashboard-table-body-item spent">
                                    @if (isset($task['time_spent']))
                                        {{ date('H:i:s', $task['time_spent'] / 1000) }}
                                    @else
                                        00:00:00
                                    @endif
                                </td>

                                <td class="dashboard-table-body-item created">
                                    {{ date('d/m/Y', $task['date_created'] / 1000) }}
                                </td>

                                <td class="dashboard-table-body-item assignees">
                                    @if (isset($task['assignees']))
                                        @foreach ($task['assignees'] as $assignee)
                                            @if (isset($assignee['profilePicture']))
                                                <figure class="dashboard-table-body-item-figure">
                                                    <img class="dashboard-table-body-item-image" width="23"
                                                        height="23" alt="Imagem do responsável"
                                                        src="{{ $assignee['profilePicture'] }}">
                                                </figure>
                                            @else
                                                <span class="dashboard-table-body-item-initials"
                                                    style="background: {{ $assignee['color'] }}">
                                                    {{ $assignee['initials'] }}
                                                </span>
                                            @endif
                                        @endforeach
                                    @else
                                        Sem responsáveis
                                    @endif
                                </td>

                                <td class="dashboard-table-body-item creator">
                                    {{ $task['creator']['username'] }}
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
