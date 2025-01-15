const todos = [
    { id: 1, description: "Fare la spesa", completed: false },
    { id: 2, description: "Pulire la casa", completed: false }
];

function addTodo(todo) {
    todos.push(todo)
}

addTodo({ id: 3, description: "Studiare JavaScript", completed: false });

console.log(todos);