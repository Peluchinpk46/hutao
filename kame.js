
        function resolverSistema() {
            const a1 = parseFloat(document.getElementById('a1').value);
            const b1 = parseFloat(document.getElementById('b1').value);
            const c1 = parseFloat(document.getElementById('c1').value);
            const a2 = parseFloat(document.getElementById('a2').value);
            const b2 = parseFloat(document.getElementById('b2').value);
            const c2 = parseFloat(document.getElementById('c2').value);

            const D = (a1 * b2) - (a2 * b1);
            const Dx = (c1 * b2) - (c2 * b1);
            const Dy = (a1 * c2) - (a2 * c1);

            let resultText = '';

            if (D !== 0) {
                const x = Dx / D;
                const y = Dy / D;
                resultText = Solución: <br> x = ${x.toFixed(2)} <br> y = ${y.toFixed(2)};
            } else if (Dx === 0 && Dy === 0) {
                resultText = 'El sistema tiene infinitas soluciones.';
            } else {
                resultText = 'El sistema no tiene solución.';
            }

            document.getElementById('result').innerHTML = resultText;
        }