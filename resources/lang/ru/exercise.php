<?php

return [
    'exercise' => 'Упражнение :exercise',
    'index' => [
        'description' => 'Cписок упражнений книги Структура и интерпретация компьютерных программ',
    ],
    'show' => [
        'description' => 'из книги Структура и интерпретация компьютерных программ',
        'exercises' => 'показать упражнения',
        'who_completed' => 'Показать кто завершил',
        'empty_description' => 'Для этого упражнения еще нет описания',
        'nobody_completed' => 'Это упражнение еще никто не завершил. Ты будешь первым!',
        'mark_complete' => 'Отметить упражнение выполненным',
        'already_completed' => 'Завершено',
        'help_us' => 'Помогите нам добавляя новые упражнения',
        'completed_by' => 'Завершено пользователями:',
        'previous' => 'Предыдущее',
        'next' => 'Следующее',
        'editor-tab' => 'Редактор',
        'discussion-tab' => 'Обсуждение',
        'description-tab' => 'Описание',
        'output-tab' => 'Вывод',
        'tests-tab' => 'Тесты',
        'editor' => [
            'auth' => [
                'required' => 'Требуется авторизация',
                'must_log_in' => 'Вам необходимо войти, чтобы пользоваться редактором',
            ],
            'message' => [
                'failed' => 'Не удалось проверить решение. Проверьте вкладку "Вывод".',
                'success' => 'Вы молодец! Не забудьте сохранить решение.',
                'has_not_tests' => 'Для этого упражнения нет проверок. Любое решение будет считаться успешным ответом.',
                'empty_solution' => 'Не удалось сохранить. Решение пусто.',
            ],
            'run' => 'Запустить',
        ],
    ],
    'mark_exercise' => 'Отметить упражнение :exercise_path выполненным',
    'remove_completed_exercise' => 'Удалить упражнение :exercise_path из выполненных',
];
