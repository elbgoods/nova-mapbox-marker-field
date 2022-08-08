<template>
  <PanelItem :index="index" :field="field">
    <template #value>
      <div id="mapContainer" class="basemap"></div>
    </template>
  </PanelItem>
</template>

<script>

import mapboxgl from "mapbox-gl"

export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
  data() {
    return {
      map: null
    };
  },
  mounted() {
    mapboxgl.accessToken = this.field.accessToken;

    const longitude = this.field.longitude;
    const latitude = this.field.latitude;

    const mapOptions = {
      container: "mapContainer",
      style: "mapbox://styles/mapbox/streets-v11",
      center: [longitude, latitude],
      zoom: this.field.zoom || 10,
    }

    this.map = new mapboxgl.Map(mapOptions);

    this.map.addControl(new mapboxgl.NavigationControl({
      showCompass: false
    }), 'top-left');

    // marker
    this.map.on('load', () => {
      new mapboxgl.Marker()
          .setLngLat([longitude, latitude])
          .addTo(this.map);
    })
  },
}
</script>
<style lang="scss" scoped>
@import "~mapbox-gl/dist/mapbox-gl.css";

#mapContainer {
  height: 480px;
}
</style>
