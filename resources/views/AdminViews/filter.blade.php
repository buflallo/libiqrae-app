@foreach ($commandes as $commande)
    <tr>
        <td>{{ $commande->nom }}</td>
        <td>{{ $commande->tel }}</td>
        <td>{{ $commande->address }}</td>
        <td>{{ $commande->rem }}</td>
        <td>
            <div class="badge rounded-pill bg-light w-100">{{ $commande->status }}</div>
        </td>
        <td>
            <div class="d-flex gap-2"> 
                <a href="{{ asset('')}}admin/UpdateCommande/{{ $commande->pere_id }}" class="btn btn-light btn-sm rounded-0">Mis a jour</a>
                <a href="{{ asset('')}}admin/print/{{ $commande->pere_id }}" class="btn btn-light btn-sm rounded-0">Print</a>
                <a href="{{ asset('')}}admin/UpdateCommande/{{ $commande->pere_id }}/Livré" class="btn btn-light btn-sm rounded-0">Livré</a>
                <a href="{{ asset('')}}admin/UpdateCommande/{{ $commande->pere_id }}/En attente" class="btn btn-light btn-sm rounded-0">En attente</a>
                <a href="{{ asset('')}}admin/UpdateCommande/{{ $commande->pere_id }}/Annuler" class="btn btn-light btn-sm rounded-0">Annuler</a>
                
            </div>
        </td>
        <td>{{ $commande->created_at }}</td>
    </tr>
@endforeach	