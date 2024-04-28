const app = new (function(){
    
    this.tbody = document.getElementById("tbody");

    this.list = () => {
        fetch("../controllers/list.php")
            .then((res) => res.json())
            .then((data) => {
                this.tbody.innerHTML = "";
                data.forEach(item => {
                    this.tbody.innerHTML += `
                        <tr>
                            <td>${item.idexp}</td>
                            <td>${item.dnte}</td>
                            <td>${item.dndo}</td>
                            <td>${item.ofen}</td>
                            <td>${item.desch}</td>
                            <td>${item.fden}</td>
                            <td>${item.fsuc}</td>
                            <td>
                                <a href="javascript:;" class="btn btn-warning btn-sm"onclick="app.edit($(item.idexp))>Editar</a>
                                <a href="javascript:;" class="btn btn-danger btn-sm" onclick="app.del($(item.idexp))>Eliminar</a>
                            </td>
                        </tr>
                    `;
                });
            })
            .catch((error) => console.log(error));
    };
})();
app.list();