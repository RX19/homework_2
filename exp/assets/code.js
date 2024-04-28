const app = new (function(){
    
    this.tbody = document.getElementById("tbody");
    this.idexp = document.getElementById("idexp");
    this.dndo = document.getElementById("dndo");
    this.dnte = document.getElementById("dnte");
    this.ofen = document.getElementById("ofen");
    this.desch = document.getElementById("desch");
    this.fden = document.getElementById("fden");
    this.fsuc = document.getElementById("fsuc");

    if (this.idexp.value == "") {
        fetch("../controllers/save.php", {
            method: "POST", body: form,
        })
            .then((res) => res.json())
            .then((data) => {
                alert("Creado con exito");
                this.list();
                this.cls();
            })
            .catch((error) => console.log(error));    
        }else {
            fetch("../controllers/update.php", {
                method: "POST", body: form,
            })
                .then((res) => res.json())
                .then((data) => {
                    alert("Actualizado con exito");
                    this.list();
                    this.cls();
                })
                .catch((error) => console.log(error));   
    };
    

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

    this.save = () => {
        var form = new FormData();
        form.append("dnte", this.dnte.value);
        form.append("dndo", this.dndo.value);
        form.append("ofen", this.ofen.value);
        form.append("desch", this.desch.value);
        form.append("fden", this.fden.value);
        form.append("fsuc", this.fsuc.value);
        fetch("../controllers/save.php", {
            method: "POST", body: form,
        })
            .then((res) => res.json())
            .then((data) => {
                alert("Creado con exito");
                this.list();
                this.cls();
            })
            .catch((error) => console.log(error));    
    };

    this.edit = (idexp) => {
        var form = new FormData();
        form.append("idexp", idexp);
        fetch("../controllers/edit.php", {
            method: "POST",
            body: form,
        })
            .then((res) => res.json())
            .then((data) => {
                this.idexp.value = data.idexp;
                this.dnte.value = data.dnte;
                this.dndo.value = data.dndo;
                this.ofen.value = data.ofen;
                this.desch.value = data.desch;
                this.fden.value = data.fden;
                this.fsuc.value = data.fsuc;
            })
            .catch((error) => console.log(error));
    };

    this.del = (idexp) => {
        var form = new FormData();
        form.append("idexp", idexp);
        if (confirm("¿Esta seguro de eliminarlo?")) {
            fetch("../controllers/del.php", {
                method: "POST",
                body: form,
            })
                .then((res) => res.json())
                .then((data) => {
                    alert("Eliminado con exito");
                    this.list();
                })
                .catch((error) => console.log(error));
        }
    };

    this.cls = () => {
        this.dnte.value = "";
        this.dndo.value = "";
        this.ofen.value = "";
        this.desch.value = "";
        this.fden.value = "";
        this.fsuc.value = "";
    };

})();
app.list();