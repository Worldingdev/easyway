@if(session('success') && session('colis'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                title: 'Sikse',
                html: `
                    <p>{{ session('success') }}</p>
                    <table border="1" style="width:100%; text-align:left; border-collapse: collapse;">
                        <tr>
                            <th style="padding: 8px;">Tracking Number</th>
                            <td style="padding: 8px;">{{ session('colis')->trackingNumber }}</td>
                        </tr>
                        <tr>
                            <th style="padding: 8px;">Expéditeur</th>
                            <td style="padding: 8px;">{{ session('colis')->senderName }}</td>
                        </tr>
                        <tr>
                            <th style="padding: 8px;">Destinataire</th>
                            <td style="padding: 8px;">{{ session('colis')->receiverName }}</td>
                        </tr>
                        <tr>
                            <th style="padding: 8px;">Poids</th>
                            <td style="padding: 8px;">{{ session('colis')->weight }}</td>
                        </tr>
                        <tr>
                            <th style="padding: 8px;">État</th>
                            <td style="padding: 8px;">{{ session('colis')->state }}</td>
                        </tr>
                        <tr>
                            <th style="padding: 8px;">Date de Dépôt</th>
                            <td style="padding: 8px;">{{ session('colis')->D_Deposite }}</td>
                        </tr>
                        <tr>
                            <th style="padding: 8px;">Date de Livraison</th>
                            <td style="padding: 8px;">{{ session('colis')->D_Delivery ?? 'Non Livré' }}</td>
                        </tr>
                    </table>
                `,
                icon: 'success',
                confirmButtonText: 'OK'
            });
        });
        </script>
    @endif

    @if(session('error'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                title: 'Ere',
                html: `<p>{{ session('error') }}</p> <a class="btn btn-success" href="https://wa.me/{{session('admin')->tel}}"> <i class="bi bi-whatsapp"></i> Kontakte yon ajan</a>`,
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
        </script>
    @endif