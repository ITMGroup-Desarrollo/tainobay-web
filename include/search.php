<?php
include_once("include/lang/{$idioma}-port-experience.php");
include_once("include/lang/{$idioma}-discover-beyond.php");
?>

<style>
  .search-input {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 14px;
    font-weight: 400;
    /* line-height: 1.5; */
    color: white;
    background-color: var(--blue-color);
    background-clip: padding-box;
    border: 1px solid white;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    transition: background .15s ease-in-out;
    border-radius: 25px;
    border: solid 2px white;
  }

  .icon-search {
    color: white;
    position: absolute;
    top: 0;
    right: 0;
    padding: 4px 12px;
  }

  .search-input:focus-visible {
    background-color: white;
    color: var(--blue-color);
    outline: none;
  }

  .search-input:focus-visible .icon-search {
    color: var(--blue-color);
  }

  .search-input:active,
  .search-input:focus {
    outline: none;
  }

  .search-input::placeholder {
    font-size: 14px;
  }

  #results {
    color: var(--blue-color);
    margin-top: 5px;
  }
</style>

<div class="position-relative">
  <div class="position-relative search-content">
    <input type="text" id="search" class="search-input" placeholder="WHAT TO FIND?">
    <span class="icon-search">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
      </svg>
    </span>
  </div>
  <div id="results" class="position-absolute bg-light w-100 rounded"></div>
</div>

<script>
  const points = <?php echo json_encode($points); ?>;
  const tours = <?php echo json_encode($tours); ?>;
  // const blogs = <?php echo json_encode('./data.json'); ?>;
  // console.log(blogs);

  const data = [
    ...points.map(item => ({
      name: item.name,
      path: item.path
    })),
    ...tours.map(item => ({
      name: item.tourName,
      path: '<?php echo $idioma; ?>/discover-beyond'
    }))
  ];

  document.getElementById('search').addEventListener('input', function() {
    let query = this.value.toLowerCase();

    if (query.length > 2) {
      let results = data.filter(item => item.name.toLowerCase().includes(query));

      let output = '';
      if (results.length > 0) {
        results.forEach(item => {
          output += `<a href="${item.path}" class="d-block px-2 py-1 text-blue">${item.name}</a>`;
        });
      } else {
        output = '<p class="d-block px-2 py-1 text-blue">No results found</p>';
      }
      document.getElementById('results').innerHTML = output;
    } else {
      document.getElementById('results').innerHTML = '';
    }

  });
</script>