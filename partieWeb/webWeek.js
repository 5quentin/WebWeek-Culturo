let valI;
/////////////////////Voir plus///////////////////////////////////////////////
function VoirPlus() {
    const paragraphPrez = document.getElementById('VoirPlusGraph');
    if (paragraphPrez.classList.contains('voirMoins')) {
        paragraphPrez.classList.remove('voirMoins');
        paragraphPrez.classList.add('VoirPlus');
    } else {
        paragraphPrez.classList.remove('VoirPlus');
        paragraphPrez.classList.add('voirMoins');
    }

}
///////////////////////////////////////////////////////////////////////

fetch('https://france-geojson.gregoiredavid.fr/repo/regions.geojson')
    .then((response) => response.json())
    .then(async (json) => {
        var map = L.map('map').setView([51.01896550, 7.57780020], 4);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 14,


        }).addTo(map);

        var myPoints = [
            L.marker([45.042768, 3.882936]).addTo(map), // Le Puy-En-Velay
            L.marker([40.95, -4.1167]).addTo(map), // Ségovie
            L.marker([40.53740830, -7.27153300]).addTo(map), // Garda
            L.marker([43.3187, 11.3305]).addTo(map), // Sienne
            L.marker([51.026667, 7.569283]).addTo(map), // Gummersbach
            L.marker([51.4662, 5.79486]).addTo(map), // Deurne
            L.marker([56.675, 12.857]).addTo(map), // Halmstad 
            L.marker([49.87258820, 4.93265580]).addTo(map), // Vresse sur Semois
            L.marker([47.3833, 15.1]).addTo(map), // Leoben
            L.marker([49.29918100, 19.94956210]).addTo(map), // Zakopane
            L.marker([52.65374430, -7.24795570]).addTo(map), // Kilkenny
            L.marker([55.4904, 9.4722]).addTo(map), // Kolding
            L.marker([45.4847, 16.3736]).addTo(map), // Sisak 
            L.marker([49.9498633, 15.2772647]).addTo(map), // Kutná Hora 

        ];

        //var markersCluster = new L.MarkerClusterGroup();



        //myPoints[0].bindPopup("<b>Le Puy-En-Velay</b><br>main place.");

        function getColor(d) {
            return d > 1000 ? '#800026' :
                d > 500 ? '#BD0026' :
                    d > 200 ? '#E31A1C' :
                        d > 100 ? '#FC4E2A' :
                            d > 50 ? '#FD8D3C' :
                                d > 20 ? '#FEB24C' :
                                    d > 10 ? '#FED976' :
                                        '#FFEDA0';
        }

        function style(feature) {
            return {
                fillColor: getColor(feature.properties.density),
                weight: 3,
                opacity: 0,
                //color: 'white',
                dashArray: '3',
                fillOpacity: 0
            };
        }
        L.geoJson(json, { style: style }).addTo(map);

        function highlightFeature(e) {
            var layer = e.target;

            layer.setStyle({
                weight: 5,
                color: '#666',
                fillColor: 'blue',
                dashArray: '3',
                fillOpacity: 0.1
            });

            if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                layer.bringToFront();
            }

        }



        function resetHighlight(e) {
            geojson.resetStyle(e.target);

        }
        myPoints.forEach(function (marker) {
            // Set up a click event listener for each marker in the array
            marker.on('click', function (e) {
                var popLocation = e.latlng;
                map.setView([popLocation.lat, popLocation.lng], 14);
                InfoPays(popLocation);
                info.update(popLocation);
                /*window.setTimeout(() => {
                    map.setView([51.01896550, 7.57780020], 4);
                    InfoPays();
                    info.update();
                    //map.setZoom(4);
                }, 5000);*/
            });
        });


        function InfoPays(e) {
            const blocNomVille = document.getElementById('blocNomVille');
            const blocImgVille = document.getElementById('blocImgVille');
            const blocDescripVille = document.getElementById('blocDescripVille');
            if (e != null) {
                for (let i = 0; i < myPoints.length; i++) {
                    if (myPoints[i]._latlng == e) {
                        valI = i;
                    }
                }


                if (valI != null) {

                    var NomVille = document.createElement('h3');
                    NomVille.setAttribute('id', 'NomVille');
                    NomVille.innerHTML = "Bonojur";

                    var ImageVille = document.createElement('img');
                    ImageVille.setAttribute('src', '../img/ville_' + valI + '.png');
                    ImageVille.setAttribute('class', 'ImageVille');

                    var DescripVille = document.createElement('p');
                    DescripVille.setAttribute('class', 'DescripVille');
                    DescripVille.innerHTML = "qsdfghjklmmmmmmmmmmmmmmmmmmmmmmmmmm";

                    blocNomVille.innerHTML = '';
                    blocNomVille.appendChild(NomVille);
                    blocImgVille.innerHTML = '';
                    blocImgVille.appendChild(ImageVille);
                    blocDescripVille.innerHTML = '';
                    blocDescripVille.appendChild(DescripVille);
                }
            } else {
                blocNomVille.innerHTML = '';
                blocImgVille.innerHTML = '';
                blocDescripVille.innerHTML = '';
            }



        }

        var info = L.control();

        info.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
            this.update();
            return this._div;
        };
        info.update = function (e) {
            if(e!=null){
                this._div.id = "infoZoom";
                this._div.classList.add('Zoomer');
                this._div.innerHTML = '<i class="fa-solid fa-compress"></i>';
                
            }else{
                this._div.id = "infoZoom";
                this._div.classList.remove('Zoomer');
            }
            
        };
        info.addTo(map);
        const deZoom = document.getElementById('infoZoom');
        deZoom.addEventListener('click',GrandCarte);

        function GrandCarte(){
            map.setView([51.01896550, 7.57780020], 4);
            InfoPays();
            info.update();
        }
        // method that we will use to update the control based on feature properties passed

        let elec;
        await fetch('https://yvan-thalamas.github.io/sae-mmi-api/election.json')
            .then((response) => response.json())
            .then((json => elec = json))

        function tab(tableau) {
            let poli = tableau['politicians'];

            poli.sort(function (a, b) {
                return a.votes - b.votes;
            });

            poli = poli.reverse();
            var texte = '';

            for (i = 0; i < tableau['politicians'].length; i++) {
                texte = texte + '</b><br /><strong>' + tableau['politicians'][i].firstName + ' ' + tableau['politicians'][i].lastName + '</strong></br>' +
                    tableau['politicians'][i].votes + " ==> " + ((tableau['politicians'][i].votes / tableau.registers) * 100).toFixed(2) +
                    "%";
            }
            return texte;
        }
        /*var JsonDep = './departements-region.json';
         var request = new XMLHttpRequest();
         request.open('GET',JsonDep);
    
         request.responseType = 'json';
         request.send();
         request.onload = function(){
            var Dep=request.reponse;
         }
        let JsonDep;
         await fetch('./departements-region.json')
         .then((response) => response.json())
         .then((json => JsonDep = json))
    
         
         function tabDep(tableau2){
            let Dep = tableau2['Departements'];
    
            var TextDepart ='';
    
            for(i=0;i<tableau['Departements'].length; i++){
                TextDepart = TextDepart + '</b><br /><strong>'+ tableau2['Departements'][i].nom +' '+
                tableau2['Departements'][i].code + " ==> " + tableau2['Departements'][i].codeRedion;
            }
            console.log(TextDepart);
            return TextDepart;
            
        }*/

    });

