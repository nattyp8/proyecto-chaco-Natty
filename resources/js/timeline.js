window.timeLineComponent=(yearData)=>({
    year:yearData,
    currentEvent: null,
    selectEvent(event){
        this.currentEvent=event
    }
})