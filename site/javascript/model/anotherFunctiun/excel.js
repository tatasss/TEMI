function newApi(format) {
    return ExcellentExport.convert({
        anchor: 'anchorNewApi-' + format,
        filename: 'temi' ,
        format: format
    }, [{
        name: 'feuille TEMI',
        from: {
            table: 'datatable'
        }
    }]);
}