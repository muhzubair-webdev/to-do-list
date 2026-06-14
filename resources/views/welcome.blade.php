<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Premium Tasks</title>
    <meta name="description" content="A premium, state-of-the-art to-do list application.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #8b5cf6;
            --primary-hover: #7c3aed;
            --secondary: #ec4899;
            --bg-base: #0f172a;
            --bg-glass: rgba(30, 41, 59, 0.7);
            --bg-glass-hover: rgba(30, 41, 59, 0.9);
            --border: rgba(255, 255, 255, 0.1);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --success: #10b981;
            --danger: #ef4444;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background-color: var(--bg-base);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: 
                radial-gradient(at 0% 0%, rgba(139, 92, 246, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(236, 72, 153, 0.15) 0px, transparent 50%);
            background-attachment: fixed;
            padding: 20px;
        }

        .app-container {
            width: 100%;
            max-width: 480px;
            background: var(--bg-glass);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            animation: slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            text-align: center;
            margin-bottom: 32px;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 8px;
            letter-spacing: -1px;
        }

        .header p {
            color: var(--text-muted);
            font-size: 0.95rem;
            font-weight: 400;
        }

        .input-group {
            display: flex;
            gap: 12px;
            margin-bottom: 32px;
            position: relative;
        }

        .todo-input {
            flex: 1;
            background: rgba(15, 23, 42, 0.5);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 16px 20px;
            color: var(--text-main);
            font-size: 1rem;
            transition: all 0.3s ease;
            outline: none;
        }

        .todo-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(139, 92, 246, 0.1);
        }

        .todo-input::placeholder {
            color: var(--text-muted);
        }

        .add-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            border-radius: 16px;
            padding: 0 24px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 14px rgba(139, 92, 246, 0.3);
        }

        .add-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(139, 92, 246, 0.4);
        }

        .add-btn:active {
            transform: translateY(0);
        }

        .filters {
            display: flex;
            gap: 8px;
            margin-bottom: 24px;
        }

        .filter-btn {
            background: transparent;
            border: 1px solid var(--border);
            color: var(--text-muted);
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .filter-btn.active {
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-main);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .todo-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .todo-item {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            animation: fadeIn 0.4s ease forwards;
            position: relative;
            overflow: hidden;
        }

        .todo-item:hover {
            background: rgba(255, 255, 255, 0.06);
            transform: translateX(4px);
            border-color: rgba(255, 255, 255, 0.15);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateX(-10px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: translateX(20px);
            }
        }

        .checkbox-container {
            position: relative;
            width: 24px;
            height: 24px;
            flex-shrink: 0;
            cursor: pointer;
        }

        .checkbox-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 24px;
            width: 24px;
            background-color: transparent;
            border: 2px solid var(--text-muted);
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .todo-item:hover .checkmark {
            border-color: var(--primary);
        }

        .checkbox-container input:checked ~ .checkmark {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
            left: 7px;
            top: 3px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
            animation: checkAnim 0.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes checkAnim {
            from {
                opacity: 0;
                transform: rotate(45deg) scale(0);
            }
            to {
                opacity: 1;
                transform: rotate(45deg) scale(1);
            }
        }

        .checkbox-container input:checked ~ .checkmark:after {
            display: block;
        }

        .todo-text {
            flex: 1;
            font-size: 1.05rem;
            color: var(--text-main);
            transition: all 0.3s ease;
            word-break: break-word;
        }

        .todo-item.completed .todo-text {
            color: var(--text-muted);
            text-decoration: line-through;
            opacity: 0.6;
        }

        .delete-btn {
            background: transparent;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: all 0.2s ease;
            opacity: 0;
        }

        .todo-item:hover .delete-btn {
            opacity: 1;
        }

        .delete-btn:hover {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger);
        }

        .delete-btn svg {
            width: 18px;
            height: 18px;
            stroke-width: 2;
        }

        .empty-state {
            text-align: center;
            padding: 40px 0;
            color: var(--text-muted);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }

        .empty-state svg {
            width: 48px;
            height: 48px;
            opacity: 0.5;
        }

        .list-container {
            max-height: 400px;
            overflow-y: auto;
            padding-right: 4px;
        }

        .list-container::-webkit-scrollbar {
            width: 6px;
        }

        .list-container::-webkit-scrollbar-track {
            background: transparent;
        }

        .list-container::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        .list-container::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .stats {
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        .clear-btn {
            background: transparent;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            font-size: 0.85rem;
            transition: color 0.2s ease;
        }

        .clear-btn:hover {
            color: var(--text-main);
        }
        
        .todo-item.removing {
            animation: fadeOut 0.3s ease forwards;
        }

    </style>
</head>
<body>

    <div class="app-container">
        <div class="header">
            <h1>Task Master</h1>
            <p>Elevate your productivity</p>
        </div>

        <form class="input-group" id="todoForm">
            <input type="text" class="todo-input" id="todoInput" placeholder="What needs to be done?" autocomplete="off" required>
            <button type="submit" class="add-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </button>
        </form>

        <div class="filters" id="filters">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="active">Active</button>
            <button class="filter-btn" data-filter="completed">Completed</button>
        </div>

        <div class="list-container">
            <ul class="todo-list" id="todoList">
                <!-- Todo items will be inserted here -->
            </ul>
        </div>

        <div class="stats" id="statsContainer" style="display: none;">
            <span id="itemsLeft">0 items left</span>
            <button class="clear-btn" id="clearCompleted">Clear completed</button>
        </div>
    </div>

    <script>
        // State
        let todos = JSON.parse(localStorage.getItem('todos')) || [
            { id: 1, text: 'Master modern UI design', completed: true },
            { id: 2, text: 'Separate app into reusable components', completed: false },
            { id: 3, text: 'Build something amazing', completed: false }
        ];
        let currentFilter = 'all';

        // DOM Elements
        const todoForm = document.getElementById('todoForm');
        const todoInput = document.getElementById('todoInput');
        const todoList = document.getElementById('todoList');
        const filters = document.getElementById('filters');
        const itemsLeft = document.getElementById('itemsLeft');
        const clearCompletedBtn = document.getElementById('clearCompleted');
        const statsContainer = document.getElementById('statsContainer');

        // Initialize
        function init() {
            renderTodos();
            updateStats();
        }

        // Save to local storage
        function saveTodos() {
            localStorage.setItem('todos', JSON.stringify(todos));
        }

        // Add Todo
        todoForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const text = todoInput.value.trim();
            if (text) {
                const newTodo = {
                    id: Date.now(),
                    text,
                    completed: false
                };
                todos.unshift(newTodo);
                saveTodos();
                todoInput.value = '';
                
                // If filter is completed, switch to all to show new item
                if (currentFilter === 'completed') {
                    setFilter('all');
                } else {
                    renderTodos();
                    updateStats();
                }
            }
        });

        // Toggle Todo
        function toggleTodo(id) {
            todos = todos.map(todo => 
                todo.id === id ? { ...todo, completed: !todo.completed } : todo
            );
            saveTodos();
            renderTodos();
            updateStats();
        }

        // Delete Todo
        function deleteTodo(id, element) {
            // Add removing animation
            element.classList.add('removing');
            
            // Wait for animation to finish
            setTimeout(() => {
                todos = todos.filter(todo => todo.id !== id);
                saveTodos();
                renderTodos();
                updateStats();
            }, 300);
        }

        // Clear Completed
        clearCompletedBtn.addEventListener('click', () => {
            // Find completed items in DOM and animate them
            const items = todoList.querySelectorAll('.todo-item.completed');
            items.forEach(item => item.classList.add('removing'));
            
            setTimeout(() => {
                todos = todos.filter(todo => !todo.completed);
                saveTodos();
                renderTodos();
                updateStats();
            }, 300);
        });

        // Filtering
        filters.addEventListener('click', (e) => {
            if (e.target.classList.contains('filter-btn')) {
                const filter = e.target.dataset.filter;
                setFilter(filter);
            }
        });

        function setFilter(filter) {
            currentFilter = filter;
            
            // Update active button
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.toggle('active', btn.dataset.filter === filter);
            });
            
            renderTodos();
        }

        // Render functions
        function renderTodos() {
            let filteredTodos = todos;
            
            if (currentFilter === 'active') {
                filteredTodos = todos.filter(todo => !todo.completed);
            } else if (currentFilter === 'completed') {
                filteredTodos = todos.filter(todo => todo.completed);
            }

            if (todos.length === 0) {
                todoList.innerHTML = `
                    <div class="empty-state">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <p>You have no tasks yet. Add one above!</p>
                    </div>
                `;
                return;
            }

            if (filteredTodos.length === 0) {
                todoList.innerHTML = `
                    <div class="empty-state">
                        <p>No ${currentFilter} tasks found.</p>
                    </div>
                `;
                return;
            }

            todoList.innerHTML = '';
            
            filteredTodos.forEach(todo => {
                const li = document.createElement('li');
                li.className = \`todo-item \${todo.completed ? 'completed' : ''}\`;
                
                li.innerHTML = \`
                    <label class="checkbox-container">
                        <input type="checkbox" \${todo.completed ? 'checked' : ''}>
                        <span class="checkmark"></span>
                    </label>
                    <span class="todo-text">\${escapeHtml(todo.text)}</span>
                    <button class="delete-btn" aria-label="Delete task">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                    </button>
                \`;

                // Event Listeners
                const checkbox = li.querySelector('input[type="checkbox"]');
                checkbox.addEventListener('change', () => toggleTodo(todo.id));

                const deleteBtn = li.querySelector('.delete-btn');
                deleteBtn.addEventListener('click', () => deleteTodo(todo.id, li));

                todoList.appendChild(li);
            });
        }

        function updateStats() {
            const activeCount = todos.filter(todo => !todo.completed).length;
            const hasCompleted = todos.some(todo => todo.completed);
            
            itemsLeft.textContent = \`\${activeCount} item\${activeCount !== 1 ? 's' : ''} left\`;
            
            clearCompletedBtn.style.visibility = hasCompleted ? 'visible' : 'hidden';
            
            statsContainer.style.display = todos.length > 0 ? 'flex' : 'none';
        }

        // Utility to prevent XSS
        function escapeHtml(unsafe) {
            return unsafe
                 .replace(/&/g, "&amp;")
                 .replace(/</g, "&lt;")
                 .replace(/>/g, "&gt;")
                 .replace(/"/g, "&quot;")
                 .replace(/'/g, "&#039;");
        }

        // Start the app
        init();
    </script>
</body>
</html>
