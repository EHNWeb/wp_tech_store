<!-- TRAILINGSLASHIT() va ajouter un SLASH après l'URL du site  -->
<form 
    method="GET" 
    action="<?php echo trailingslashit(home_url()) ?>" 
    class="d-flex"
>
    <!-- Ajout de NEME et ID ayant pour valeur 's', et ne pas écrire autre chose sinon n cela ne fonctionnera -->
    <input 
        class="form-control me-2 btn-outline-primary text-primary" 
        name="s" 
        id="s" 
        type="search" 
        placeholder="Rechercher" 
        aria-label="Search"
    >
    <button 
        class="btn btn-outline-success" 
        type="submit">
        <i class="bi bi-search"></i>
    </button>
</form>