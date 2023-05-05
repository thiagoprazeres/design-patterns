// Cria um objeto que será o protótipo do novo objeto
const prototypeObj = {
    name: 'Objeto Protótipo',
    getDescription() {
        return `Este é o objeto protótipo com o nome "${this.name}"`;
    }
};

// Cria um novo objeto com o protótipo definido acima
const newObj = Object.create(prototypeObj);

console.log(newObj.getDescription()); // Este é o objeto protótipo com o nome "Novo Objeto"

// Adiciona ou modifica as propriedades do novo objeto
newObj.name = 'Novo Objeto';

console.log(newObj.getDescription()); // Este é o objeto protótipo com o nome "Novo Objeto"