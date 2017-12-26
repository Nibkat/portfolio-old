class Project {
    constructor(project) {
        this.element = project;
        this.name = $(project).find(".project-title").html();
        this.tags = [];

        for (let i = 0; i < $(project).find(".tag").length; i++) {
            this.tags.push($(project).find(".tag").eq(i).html());
        }
    }
}