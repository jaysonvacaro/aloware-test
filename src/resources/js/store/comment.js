import axios from 'axios';

const state = {
    comments: []
};

const getters = {
    getComments: state => {
        return state.comments;
    },
};

const mutations = {
    setComments: (state, comments) => {
        state.comments = comments;
    },
};

const actions = {
    async fetchComments({ commit }, payload) {
        const data = await axios({
            method: 'GET',
            url: '/api/post/1/comments'
        });
        commit('setComments', data.data);
        return Promise.resolve({});
    },
    async addComment({ commit }, payload) {
        console.log('payload', payload);
        const data = await axios({
            method: 'POST',
            url: '/api/post/1/comment/',
            data: {
                id: payload.id
            }
        });
        // commit('pushConsoleList', data.data);
        // commit('pushRecentTest', data.data);
        return Promise.resolve(data.data);
    }
};

export default {
    namespace: true,
    state,
    getters,
    mutations,
    actions
};
