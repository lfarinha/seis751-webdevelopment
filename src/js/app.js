    var squad = [
        'Wilfredo Caballero',
        'Thibaut Courtois',
        'Marcin Bulka',
        'A Eduardo',
        'Mitchell Beeney',
        'Baba Rahman',
        'Antonio Rudiger',
        'Marcos Alonso',
        'Davide Zappacosta',
        'Gary Cahill',
        'Andreas Christensen',
        'Cesar Azpilicueta',
        'David Luiz',
        'Jake Clarke-Salter',
        'Cesc Fabregas',
        'Danny Drinkwater',
        'N\'Golo Kante',
        'Eden Hazard',
        'Tiemoue Bakayoko',
        'Victor Moses',
        'Kenedy',
        'Charly Musonda',
        'Willian',
        'Kyle Scott',
        'Ethan Ampadu',
        'Dujon Sterling',
        'Islam Feruz',
        'Alvaro Morata',
        'Pedro',
        'Michy Batshuayi'
    ]
    function returnSquad () {
        var list = document.createElement('ol')
        for(i=0; i<squad.length; i++){
            var item = document.createElement('li')
            item.appendChild(document.createTextNode(squad[i]))
            list.appendChild(item)
        }
        return list;
    }