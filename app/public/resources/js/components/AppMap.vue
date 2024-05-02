<script>
export default {
  data: function() {
    return {}
  },
  mounted() {
    let myLatlng = new window.google.maps.LatLng(12.9716, 77.5946);
    let mapOptions = {
      zoom: 14,
      center: myLatlng,
      scrollwheel: true,
    };
    let map = new window.google.maps.Map(
      document.getElementById("map"),
      mapOptions
    );

    let marker = new window.google.maps.Marker({
      position: myLatlng,
      title: "Banglore"
    })
    }
}
</script>


<template>
        <div id="map"></div>

<!-- 
  The `defer` attribute causes the callback to execute after the full HTML
  document has been parsed. For non-blocking uses, avoiding race conditions,
  and consistent behavior across browsers, consider loading using Promises.
  See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
  for more information.
  -->

</template>
<style scoped>

/**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
/* 
 * Always set the map height explicitly to define the size of the div element
 * that contains the map. 
 */
 #map {
  height: 100%;
}

/* 
 * Optional: Makes the sample page fill the window. 
 */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}

</style>